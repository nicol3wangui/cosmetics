@extends('layouts.backend')
@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              @guest
              <img class="profile-user-img img-responsive img-circle" src="{{asset('backend/images/profile/profile.png')}}" alt="User profile picture">
              @else
              <img class="profile-user-img img-responsive img-circle" src="{{asset('backend/images/profile/'.Auth::user()->profileImage)}}" alt="User profile picture">
              @endguest
              <h3 class="profile-username text-center">{{Auth::user()->name ?? 'Guest'}}</h3>

              <p class="text-muted text-center">{{Auth::user()->role ?? 'NA'}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Fullname</b> <a class="pull-right">{{Auth::user()->name ?? 'Guest'}}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{Auth::user()->email ?? 'NA'}}</a>
                </li>
                <li class="list-group-item">
                  <b>Phonenumber</b> <a class="pull-right">{{Auth::user()->phonenumber ?? 'NA'}}</a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right">{{Auth::user()->gender ?? 'NA'}}</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right">{{Auth::user()->address ?? 'NA'}}</a>
                </li>
                 <li class="list-group-item">
                  <b>Role</b> <a class="pull-right">{{Auth::user()->role ?? 'NA'}}</a>
                </li>
              </ul>

             <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Personal Information</a></li>
              <li><a href="#timeline" data-toggle="tab">Change Password</a></li>
              <li><a href="#settings" data-toggle="tab">Change Profile Image</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form class="form-horizontal" method="POST" action="{{route('updatePersonalInformation')}}">
                  @csrf
                   <input type="text" name="id" value="{{Auth::user()->id}}" hidden="true">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">FullName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{Auth::user()->name ?? ''}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" value="{{Auth::user()->email ?? ''}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Phonenumber</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phonenumber" value="{{Auth::user()->phonenumber ?? ''}}">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10">
                     <select class="form-control" name="gender" required>
                          <option value="{{Auth::user()->gender ?? ''}}">{{Auth::user()->gender ?? ''}}</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                     </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="address">{{Auth::user()->address ?? ''}}</textarea>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>



              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">


               <form class="form-horizontal" method="POST" action="{{route('updatePassword')}}">
                @csrf
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                      <input type="password" name="old_password" class="form-control"  placeholder="Enter Old Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="new_password" placeholder="Enter New Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Confirm New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm New Password">
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>

                </form>
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{route('updateProfileImage')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Profile Image</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="profileImage">
                    </div>
                  </div>
                  
                 
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection




@extends('layouts.backend')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

   <!-- Main content -->
<section class="content">
  <div class="row">
    
    <!-- Profile Column -->
    <div class="col-12 col-md-3 mb-4">
      <div class="box box-primary">
        <div class="box-body box-profile text-center">
          @guest
          <img class="profile-user-img img-fluid img-circle" src="{{ asset('backend/images/profile/profile') }}" alt="User profile picture">
          @else
          <img class="profile-user-img img-fluid img-circle" src="{{ asset('backend/images/profile/'.Auth::user()->profileImage) }}" alt="User profile picture">
          @endguest

          <h3 class="profile-username mt-3">{{ Auth::user()->name ?? 'Guest' }}</h3>
          <p class="text-muted">{{ Auth::user()->role ?? 'NA' }}</p>

          <ul class="list-group list-group-unbordered text-start mt-3">
            <li class="list-group-item d-flex justify-content-between">
              <b>Fullname</b> <span>{{ Auth::user()->name ?? 'Guest' }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <b>Email</b> <span>{{ Auth::user()->email ?? 'NA' }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <b>Phonenumber</b> <span>{{ Auth::user()->phonenumber ?? 'NA' }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <b>Gender</b> <span>{{ Auth::user()->gender ?? 'NA' }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <b>Address</b> <span>{{ Auth::user()->address ?? 'NA' }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <b>Role</b> <span>{{ Auth::user()->role ?? 'NA' }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.col -->

    <!-- Tabs Column -->
    <div class="col-12 col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Personal Information</a></li>
          <li><a href="#timeline" data-toggle="tab">Change Password</a></li>
          <li><a href="#settings" data-toggle="tab">Change Profile Image</a></li>
        </ul>

        <div class="tab-content p-3">
          
          <!-- Personal Info Tab -->
          <div class="active tab-pane" id="activity">
            <form class="form-horizontal" method="POST" action="{{ route('updatePersonalInformation') }}" >
              @csrf
              <input type="text" name="id" value="{{ Auth::user()->id}}" hidden="true">
              <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">FullName</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" value="{{ Auth::user()->name ?? '' }}" required>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPhone" class="col-sm-3 col-form-label">Phonenumber</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="phonenumber" value="{{ Auth::user()->phonenumber ?? '' }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputGender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control" name="gender" required>
                    <option value="{{ Auth::user()->gender ?? '' }}">{{ Auth::user()->gender ?? 'Select Gender' }}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputAddress" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="address">{{ Auth::user()->address ?? '' }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                  <button type="submit" class="btn btn-danger w-100">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->

          <!-- Change Password Tab -->
          <div class="tab-pane" id="timeline">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputOldPassword" class="col-sm-3 col-form-label">Old Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputOldPassword" name="oldpassword" placeholder="Enter Old Password">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputNewPassword" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputNewPassword" name="password" placeholder="Enter New Password">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputConfirmPassword" class="col-sm-3 col-form-label">Confirm New Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputConfirmPassword" name="confirmpassword" placeholder="Confirm New Password">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                  <button type="submit" class="btn btn-primary w-100">Update Password</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->

          <!-- Profile Image Tab -->
          <div class="tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="profileImage" class="col-sm-3 col-form-label">Profile Image</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="profileimage">
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

@endsection