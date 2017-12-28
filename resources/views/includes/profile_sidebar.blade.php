<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="https://lorempixel.com/640/480/?25516" class="img-responsive" alt="">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            Marcus Doe
        </div>
        <div class="profile-usertitle-job">
            Developer
        </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <div class="profile-userbuttons">
        <button type="button" class="btn btn-success btn-sm">Follow</button>
        <button type="button" class="btn btn-danger btn-sm">Message</button>
    </div>
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    Overview </a>
            </li>
            <li>
                <a href="#">
                    <i class="far fa-user"></i>
                    Account Settings </a>
            </li>
            <li>
                <a href="#">
                    <i class="far fa-building"></i>
                    My Organisations </a>
            </li>
            <li>
                <a href="{{ route('Api_Home') }}">
                    <i class="fas fa-map-signs"></i>
                    Api </a>
            </li>
            <li>
                <a href="#">
                    <i class="far fa-question-circle"></i>
                    Help </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>