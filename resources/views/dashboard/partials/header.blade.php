<div class="flex p-2">
    <a class="btn btn-ghost normal-case text-xl " href="/dashboard">KA-Blogs</a>
    <div class="ml-auto lg:hidden">
        <span class="btn cursor-pointer btn-ghost normal-case focus:bg-slate-900 text-xl">
            <ion-icon name="menu" onclick="menu(this)"></ion-icon>
        </span>
    </div>
    <div class="dropdown dropdown-end ml-auto lg:block hidden">
        <label tabindex="0" class="btn text-black bg-transparent border-none hover:bg-transparent">
            <p class="mr-2"> {{ auth()->user()->name }}</p>
            <ion-icon name="chevron-down-outline"></ion-icon>
        </label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
            <li><a href="/dashboard" class="w-full ">
                    <ion-icon name="file-tray-stacked-outline"></ion-icon> Dashboard
                </a></li>
            <li> <label for="my-modal" class="w-full modal-button focus:bg-sky-500">
                    <ion-icon name="log-out-outline"></ion-icon> Log Out
                </label></li>
        </ul>
    </div>
</div>
