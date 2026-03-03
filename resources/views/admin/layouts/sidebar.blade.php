	<div class="main-wrapper">
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
          Polah <span>Mullah</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Web Management</li>
          <li class="nav-item">
            <a href="{{ route('home.page') }}" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square link-icon"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              <span class="link-title">Home</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">About</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('about.page') }}" class="nav-link">About Update</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('about.page.details') }}" class="nav-link">About Details</a>
                </li>
                {{-- <li class="nav-item">
                  <a href="{{ route('about.page.profile') }}" class="nav-link">About Profiles</a>
                </li> --}}

              </ul>
            </div>
          </li>

          {{-- social media link --}}
           <li class="nav-item">
            <a href="{{ route('social_media') }}" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square link-icon"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              <span class="link-title">Social Media</span>
            </a>
          </li>

          {{-- Book --}}
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#book_area" role="button" aria-expanded="false" aria-controls="book_area">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Book</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="book_area">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('admin.book.author') }}" class="nav-link">Update Author Info</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.book.add') }}" class="nav-link">Add Book </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="{{ route('about.page.profile') }}" class="nav-link">About Profiles</a>
                </li> --}}

              </ul>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
      </div>
    </nav>