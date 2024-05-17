<x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <style>
    body {
        background: #fff;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    h4 {
        font-size: 40px;
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #000;
        box-shadow: none
    }

    .profile-button:active {
        background: #000;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 20px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
    </style>
</head>

<body>
    <h4 class="text-center m-5">Profile</h4>
    <div class="container rounded bg-white mt-5 mb-5 h-full w-full">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    </div>
                    <div class="row mt-3">
                        <form method="post" action="{{ route('profile.update') }}">
                             @csrf
                             @method('patch')
                            <div class="col-md-12 mb-5">
                                <label class="labels mb-2">Name</label>
                                <input id="name" name="name" type="text" class="form-control mt-1 block w-full" value="{{old('name', $user->name)}}">
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div class="col-md-12">
                                <label class="labels mb-2">Email ID</label>
                                <input id="email" name="email" type="email" class="mt-1 block w-full form-control"  value="{{old('email', $user->email)}}">
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification"
                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                                @endif
                            </div>
                            @endif
                    
                         <div class="mt-5"><button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                         </div>
                         @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
                  @endif
                     </form>
                 </div>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    </div>
                    <div class="row mt-3">
                                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Update Password') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                </p>
                            </header>
                        <form method="post" action="{{ route('password.update') }}">
                             @csrf
                             @method('put')
                             <div class="col-md-12 mb-5">
                                <label class="labels mb-2">{{__('Current Password')}}</label>
                                <input class="form-control mt-1 block w-full" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" >
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                            <div class="col-md-12 mb-5">
                                <label class="labels mb-2">{{__('New Password')}}</label>
                                <input id="update_password_password" name="password" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" >
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                            <div class="col-md-12 mb-5">
                                <label class="labels mb-2">{{__('Confirm Password')}}</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" >
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                         <div class="mt-5"><button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                         </div>
                         @if (session('status') === 'password-updated')
                                <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                          >{{ __('Saved.') }}
                          </p>
                         @endif
                     </form>
                 </div>
                </div>
            </div>
            <div class="col-md-2 border-rigth d-flex flex-column  justify-content-end">
                            <section class="space-y-6">
                <x-danger-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    >{{ __('Delete Account') }}</x-danger-button>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="mt-6">
                                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1 block w-3/4"
                                    placeholder="{{ __('Password') }}"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ms-3">
                                    {{ __('Delete Account') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </section>

            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
</x-app-layout>