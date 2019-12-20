<nav class="navbar bg-white shadow-sm">
<a class="navbar-brand" href="{{ route('home')}}">
    {{ config('app.name') }}
	</a>
	<button class="navbar-toggler" type="button" 
		data-toggle="collapse" 
		data-target="#navbarSupportedContent" 
		aria-controls="navbarSupportedContent" 
		aria-expanded="false" 
		aria-label="{{ __('Toggle navigation') }}">
    	<span class="navbar-toggler-icon"></span>
    </button>
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav">
			<li class="nav-item">
			 <a class="nav-link {{ setActive('dashboard') }}" 
			       href="{{ route('dashboard') }}">
				 ('Dashboard')</a>
		    </li>
			<li class="nav-item">
			 <a class="nav-link {{ setActive('userManagement') }}"       >
               ('User Management')</a>             
            </li>
            <li class="subnav-item">
               <a class="subnav-link {{ setActive('roles') }}">
               ('Roles')</a>
            </li>
            <li class="subnav-item">
               <a class="subnav-link {{ setActive('users') }}">
               ('Users')</a>
            </li>
			<li class="nav-item">
			  <a class="nav-link {{ setActive('expenseManagement') }}">
			     ('Expense Management')</a></li>
                 <li class="subnav-item">
               <a class="subnav-link {{ setActive('ExpenseCategories') }}">
               ('ExpenseCategories')</a>
            </li>
            <li class="subnav-item">
               <a class="subnav-link {{ setActive('Expenses') }}">
               ('Expenses')</a>
            </li>
			</li>
			
			<li>
				
		</ul>
	</nav>