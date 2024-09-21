<div>
    <h1>
        Là header
    </h1>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a href="#" class="dropdown-item">My Profile</a></li>
            <li><a href="#" class="dropdown-item">Language</a></li>
            <li><a href="{{ route('logout') }}" class="dropdown-item">Logout</a></li>
        </ul>
    </div>
</div>