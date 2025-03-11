<div class="input-group max-w-sm">
    <div class="relative w-full">
        <input id="toggle-password-floating" type="password" class="input input-floating peer"
            placeholder="Enter password" value="Pwd_1242@mA1" />
        <label class="input-floating-label" for="toggle-password-floating">Password</label>
    </div>
    <span class="input-group-text">
        <button type="button" data-toggle-password='{ "target": "#toggle-password-floating" }' class="block"
            aria-label="password toggle">
            <span
                class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-5 flex-shrink-0"></span>
            <span
                class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-5 flex-shrink-0"></span>
        </button>
    </span>
</div>