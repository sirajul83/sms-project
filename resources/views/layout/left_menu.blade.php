 <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-edit"></i>
            <span class="nav-link-text">Students</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{URL::to('/student/create')}}">Add student</a>
            </li>
            <li>
              <a href="{{URL::to('/student')}}">View students</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
              <i class="fa fa-edit"></i>
            <span class="nav-link-text">Subject</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="{{URL::to('/subject/create')}}">Add Subject </a>
            </li>
            <li>
              <a href="{{URL::to('/subject')}}">View Subject</a>
            </li>
          </ul>
        </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
             <i class="fa fa-edit"></i>
             <span class="nav-link-text">Teacher</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents3">
             <li>
                 <a href="{{URL::to('/teacher/create')}}">Add Teacher </a>
             </li>
             <li>
                 <a href="{{URL::to('/teacher')}}">View Teacher</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
             <i class="fa fa-edit"></i>
             <span class="nav-link-text">Mark</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents4">
             <li>
                 <a href="{{URL::to('/mark/create')}}">Add Mark </a>
             </li>
             <li>
                 <a href="{{URL::to('/mark')}}">View Mark</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
             <i class="fa fa-edit"></i>
             <span class="nav-link-text">Exam</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents5">
             <li>
                 <a href="{{URL::to('/exam/create')}}">Add Exam </a>
             </li>
             <li>
                 <a href="{{URL::to('/exam')}}">View Exam</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
             <i class="fa fa-edit"></i>
             <span class="nav-link-text">Attendance</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents6">
             <li>
                 <a href="{{URL::to('/attendance/create')}}">Add Attendance </a>
             </li>
             <li>
                 <a href="{{URL::to('/attendance')}}">View Attendance</a>
             </li>
         </ul>
     </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents7" data-parent="#exampleAccordion">
              <i class="fa fa-edit"></i>
            <span class="nav-link-text">Addmission</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents7">
            <li>
                <a href="{{URL::to('/addmission')}}">View Addmission </a>
              <a href="navbar.html"></a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Developers</span>
          </a>
        </li>
      </ul>