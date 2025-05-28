<x-layouts.guest title="Login" bodyClass="page-login" pageTitle="Login" btnText="Login">
    <x-slot:formFields>
        <div class="form-group">
            <input type="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password"/>
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset"
            >Reset Password</a
            >
        </div>
    </x-slot:formFields>

    <x-slot:dontHaveAccount>
        Don't have an account? -
        <a href="/signup.html"> Click here to create one</a>
    </x-slot:dontHaveAccount>

</x-layouts.guest>
