<div class="p-4 bg-base-100 lg:flex lg:px-40">
    <div class="flex mb-3">
        <a class="btn btn-ghost normal-case text-xl hover:bg-slate-200" href="/">KA-Blogs</a>
        <div class="ml-auto navbar-center lg:hidden">
            <span class="btn cursor-pointer btn-ghost normal-case hover:bg-slate-200 text-xl">
                <ion-icon name="menu" onclick="menu(this)"></ion-icon>
            </span>
        </div>
    </div>
    <div class="navbar-center lg:block ml-auto">
        <ul id="list" class="menu menu-vertical hidden lg:menu-horizontal  p-0">
            <li><a href="/"
                    class="{{ $active == 'Home' ? 'bg-slate-200' : '' }} hover:bg-slate-200 focus:bg-sky-500 focus:text-slate-100">Home
                </a></li>
            <li><a href="/about"
                    class="{{ $active == 'About' ? 'bg-slate-200' : '' }} hover:bg-slate-200 focus:bg-sky-500 focus:text-slate-100">About</a>
            </li>
            <li><a href="/posts"
                    class="{{ $active == 'All Post' ? 'bg-slate-200' : '' }} hover:bg-slate-200 focus:bg-sky-500 focus:text-slate-100">Blog</a>
            </li>

            @auth
                <div class="dropdown lg:ml-4">
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
                <!-- The button to open modal -->


                <!-- Put this part before </body> tag -->
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
            @else
                <li><a href="/signin"
                        class="{{ $active == 'Sign In' ? 'bg-slate-200' : '' }} hover:bg-slate-200 focus:bg-sky-500 focus:text-slate-100">Sign
                        In </a>

                </li>
            @endauth
        </ul>
    </div>
</div>
