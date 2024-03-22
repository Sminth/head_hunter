<div class="col-md-4">
    <div class="account-information">
        <div class="profile-thumb">
            <img src="assets/img/account.jpg" alt="account holder image">
            <h3>{{session('user')->noms}}</h3>
            <p>{{session('user')->profession}}</p>
        </div>

        <ul>
            <li>
                <a href="/user" class="active">
                    <i class='bx bx-user'></i>
                    Mon profile
                </a>
            </li>
            <li>
                <a href="/candidatures">
                    <i class='bx bxs-file-doc'></i>
                    Mes tests
                </a>
            </li>
            <li>
                <a href="/candidatures">
                    <i class='bx bx-briefcase'></i>
                    Mes candidatures
                </a>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bx-envelope'></i>
                    Messages
                </a>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    Saved Jobs
                </a>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class='bx bx-lock-alt' ></i>
                    Change Password
                </a>
            </li> --}}
            <li>
                {{-- <a href="#">
                    <i class='bx bx-coffee-togo'></i>
                    Delete Account
                </a>
            </li> --}}
            <li>
                <a href="/logout">
                    <i class='bx bx-log-out'></i>
                    Déconnexion
                </a>
            </li>
        </ul>
    </div>
</div>
