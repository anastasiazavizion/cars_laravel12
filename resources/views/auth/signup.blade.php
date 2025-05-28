<x-layouts.guest title="Signup" bodyClass="page-login" pageTitle="Signup" btnText="Register">

    <x-slot:formFields>
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" />
        </div>
    </x-slot:formFields>

    <x-slot:dontHaveAccount>
        Already have an account? -
        <a href="/login.html"> Click here to login </a>
    </x-slot:dontHaveAccount>

</x-layouts.guest>
