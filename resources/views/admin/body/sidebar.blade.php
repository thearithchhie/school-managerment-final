 @php
     $prefix = Request::route()->getPrefix();
     $route = Route::current()->getName();

 @endphp


 <aside class="main-sidebar">
     <!-- sidebar-->
     <section class="sidebar">

         <div class="user-profile">
             <div class="ulogo">
                 <a href="{{ url()->current() }}">
                     <!-- logo for regular state and mobile devices -->
                     <div class="d-flex align-items-center justify-content-center">
                         <img src="{{ asset('image/logo_2.png') }}" alt="" width="20%">
                         <h3><b>School</b> SQ5</h3>
                     </div>
                 </a>
             </div>
         </div>

         <!-- sidebar menu-->
         <ul class="sidebar-menu" data-widget="tree">

             <li class="{{ $route == 'dashboard' ? 'active' : '' }}">
                 <a href="{{ route('dashboard') }}">
                     <i data-feather="pie-chart"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             @if (Auth::user()->role == 'Admin')
                 <li class="treeview {{ $prefix == '/users' ? 'active' : '' }} ">
                     <a href="#">
                         <i data-feather="message-circle"></i>
                         <span>Manage User</span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-right pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li class="{{ Request::is('users/view') ? 'active' : '' }}"><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
                         <li class="{{ Request::is('users/add', 'users/edit/*') ? 'active' : '' }}"><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
                     </ul>
                 </li>
             @endif

             <li class="treeview {{ $prefix == '/profile' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="grid"></i> <span>Manage Profile</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ Request::is('profile/view', 'profile/edit') ? 'active' : '' }}"><a
                             href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
                     <li class="{{ Request::is('profile/password/*') ? 'active' : '' }}"><a
                             href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a>
                     </li>

                 </ul>
             </li>



             <li class="treeview {{ $prefix == '/setups' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="credit-card"></i> <span>Setup Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ Request::is('setups/student/class/*') ? 'active' : '' }}"><a
                             href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a>
                     </li>
                     <li class="{{ Request::is('setups/student/year/*') ? 'active' : '' }}"><a
                             href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a>
                     </li>
                     <li class="{{ Request::is('setups/student/group/*') ? 'active' : '' }}"><a
                             href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a>
                     </li>
                     <li class="{{ Request::is('setups/student/shift/*') ? 'active' : '' }}"><a
                             href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a>
                     </li>
                     <li class="{{ Request::is('setups/fee/category/*') ? 'active' : '' }}"><a
                             href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a>
                     </li>
                     <li class="{{ Request::is('setups/fee/amount/*') ? 'active' : '' }}"><a
                             href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category
                             Amount</a></li>
                     <li class="{{ Request::is('setups/exam/type/*') ? 'active' : '' }}"><a
                             href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
                     <li class="{{ Request::is('setups/school/subject/*') ? 'active' : '' }}"><a
                             href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School
                             Subject</a></li>
                     <li class="{{ Request::is('setups/assign/subject/*') ? 'active' : '' }}"><a
                             href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign
                             Subject</a></li>
                     <li class="{{ Request::is('setups/designation/*') ? 'active' : '' }}"><a
                             href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation </a>
                     </li>


                 </ul>
             </li>


             <li class="treeview {{ $prefix == '/students' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="hard-drive"></i></i> <span>Student Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ Request::is('students/reg/view', 'students/reg/Add','students/year/class/*') ? 'active' : '' }}"><a
                             href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Student
                             Registration</a></li>
                     <li class="{{ Request::is('students/roll/generate/*') ? 'active' : '' }}"><a
                             href="{{ route('roll.generate.view') }}"><i class="ti-more"></i>Roll Generate</a>
                     </li>
                     <li class="{{ Request::is('students/reg/fee/view') ? 'active' : '' }}"><a
                             href="{{ route('registration.fee.view') }}"><i class="ti-more"></i>Registration
                             Fee </a></li>
                     <li class="{{ Request::is('students/monthly/fee/*') ? 'active' : '' }}"><a
                             href="{{ route('monthly.fee.view') }}"><i class="ti-more"></i>Monthly Fee </a>
                     </li>
                     <li class="{{ Request::is('students/exam/fee/*') ? 'active' : '' }}"><a
                             href="{{ route('exam.fee.view') }}"><i class="ti-more"></i>Exam Fee </a></li>



                 </ul>
             </li>


             <li class="treeview {{ $prefix == '/employees' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="package"></i> <span>Employee Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ Request::is('employees/reg/employee/*') ? 'active' : '' }}"><a
                             href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Employee
                             Registration</a></li>

                     <li class="{{ Request::is('employees/salary/employee/*') ? 'active' : '' }}"><a
                             href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee
                             Salary</a></li>

                     <li class="{{ Request::is('employees/leave/employee/*') ? 'active' : '' }}"><a
                             href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Employee
                             Leave</a></li>
                     <li class="{{ Request::is('employees/attendance/employee/*') ? 'active' : '' }}"><a
                             href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Employee
                             Attendance</a></li>
                     <li class="{{ Request::is('employees/monthly/salary/*') ? 'active' : '' }}"><a
                             href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Employee
                             Monthly Salary</a></li>
                 </ul>
             </li>



             <li class="treeview {{ $prefix == '/marks' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="edit-2"></i> <span> Marks Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ $route == 'marks.entry.add' ? 'active' : '' }}"><a
                             href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li>
                     <li class="{{ $route == 'marks.entry.edit' ? 'active' : '' }}"><a
                             href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>

                     <li class="{{ $route == 'marks.entry.grade' ? 'active' : '' }}"><a
                             href="{{ route('marks.entry.grade') }}"><i class="ti-more"></i>Marks Grade</a>
                     </li>


                 </ul>
             </li>





             <li class="treeview {{ $prefix == '/accounts' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="inbox"></i> <span> Accounts Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ Request::is('accounts/student/fee/*') ? 'active' : '' }}"><a
                             href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Student Fee</a>
                     </li>
                     <li class="{{ Request::is('accounts/account/salary/*') ? 'active' : '' }}"><a
                             href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee
                             Salary</a></li>

                     <li class="{{ Request::is('accounts/other/cost/*') ? 'active' : '' }}"><a
                             href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>


                 </ul>
             </li>




             <li class="header nav-small-cap">Report Interface</li>

             <li class="treeview {{ $prefix == '/reports' ? 'active' : '' }}">
                 <a href="#">
                     <i data-feather="server"></i></i> <span> Reports Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-right pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li class="{{ $route == 'monthly.profit.view' ? 'active' : '' }}"><a
                             href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly-Yearly
                             Profite</a></li>

                     <li class="{{ $route == 'marksheet.generate.view' ? 'active' : '' }}"><a
                             href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet
                             Generate</a></li>

                     <li class="{{ $route == 'attendance.report.view' ? 'active' : '' }}"><a
                             href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Attendance
                             Report</a></li>

                     <li class="{{ $route == 'student.result.view' ? 'active' : '' }}"><a
                             href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result
                         </a></li>

                     <li class="{{ $route == 'student.idcard.view' ? 'active' : '' }}"><a
                             href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>Student ID Card
                         </a></li>





                 </ul>
             </li>





         </ul>
     </section>

     <div class="sidebar-footer">
         <!-- item-->
         <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
             data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
         <!-- item-->
         <a href="https://github.com/" target="_blank" class="link" data-toggle="tooltip" title=""
             data-original-title="Github"><i class=" ti-github"></i></a>
         <!-- item-->
         <a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title=""
             data-original-title="Logout"><i class="ti-lock"></i></a>
     </div>
 </aside>
