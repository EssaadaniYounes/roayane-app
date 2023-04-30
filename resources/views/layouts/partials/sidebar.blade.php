
    <nav id="sidebarMenu" class="collapse bg-secondary d-sm-block sidebar position-fixed" style="width: 20%;height: 100vh">
        <div class="position-sticky">
                <img src="{{url('images/logo.png')}}" class="img-fluid"/>
            <div class="list-group list-group-flush mt-4">
                <ul id="collapseExample1" class="collapse show list-group list-group-flush">

                    <li class="list-group-item  py-1" style=" background-color: rgba(79,33,33,0.56)">
                        <a href="/" class="text-white" style="font-weight: bold">
                            Dashboard
                        </a>
                    </li>
                    <li class="list-group-item  py-1" style=" background-color: rgba(79,33,33,0.56)">
                        <a href="{{route('employees.index')}}" class="text-white" style="font-weight: bold">
                            <i class="fa-solid fa-people-group"></i>
                            Employees

                        </a>
                    </li><li class="list-group-item  py-1" style=" background-color: rgba(79,33,33,0.56)">
                        <a href="{{route('employees.create')}}" class="text-white" style="font-weight: bold">
                            <i class="fa-solid fa-people-group"></i>
                            Add new Employees

                        </a>
                    </li>
                    <li class="list-group-item  py-1" style=" background-color: rgba(79,33,33,0.56)">
                        <a href="{{route('logout.perform')}}" class="text-white" style="font-weight: bold">Logout</a>
               </li>
{{--<li class="list-group-item  py-1" style=" background-color: rgba(79,33,33,0.56)">--}}
{{--                        <a href="/conjes" class="text-white" style="font-weight: bold">Conges</a>--}}
{{--                    </li>--}}

                </ul>
            </div>
        </div>
    </nav>
