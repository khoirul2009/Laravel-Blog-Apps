<aside class=" lg:h-screen lg:w-64 px-4 p-2">
    <div id="list" class="lg:block hidden">
        <ul id="list" class="menu menu-vertical p-0 w-full ">
            <li><a href="/dashboard"
                    class=" focus:bg-sky-500 {{ Request::is('dashboard') ? 'bg-sky-500 text-white' : '' }}">
                    <ion-icon name="home-outline"></ion-icon> Dashboard
                </a></li>
            <li><a href="#"
                    class=" focus:bg-sky-500 {{ Request::is('dashboard/profile') ? 'bg-sky-500 text-white' : '' }}">
                    <ion-icon name="person-circle-outline"></ion-icon> Profile
                </a>
            </li>
            <li><a href="/dashboard/posts"
                    class=" focus:bg-sky-500 {{ Request::is('dashboard/posts') ? 'bg-sky-500 text-white' : '' }}">
                    <ion-icon name="bookmarks-outline"></ion-icon> My Post
                </a>
            </li>
            <li><a href="#" class=" focus:bg-sky-500">
                    <ion-icon name="cog-outline"></ion-icon> Settings
                </a>
            </li>

        </ul>
        @can('admin')
            <h6 class="pl-2 py-3 text-slate-400">
                Administrator
            </h6>
            <ul class="menu menu-vertical p-0 w-full  ">
                <li><a href="/dashboard/categories"
                        class=" focus:bg-sky-500 {{ Request::is('dashboard/categories') ? 'bg-sky-500 text-white' : '' }}">
                        <ion-icon name="albums-outline"></ion-icon> Categories
                    </a></li>

            </ul>
        @endcan

        <div class="dropdown lg:hidden">
            <label tabindex="0" class="btn text-black bg-transparent border-none hover:bg-transparent m-1">
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
        <input type="checkbox" id="my-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <p class="py-4 text-xl px-2">Anda yakin mau keluar?</p>
                <div class="modal-action">
                    <label for="my-modal"
                        class="btn bg-transparent border-none text-black hover:bg-slate-200">Tidak</label>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn bg-red-500 border-none hover:bg-red-700">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</aside>
