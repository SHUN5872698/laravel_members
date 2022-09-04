 <div class="list-group">
     <a href="{{ route('home') }}" class='list-group-item {{ url()->current() == route('home') ? 'active' : '' }}'>
         <span class="sidebar-font">
             <i class="sidebar-font fas fa-home pr-2"></i>一覧表示
         </span>
     </a>
     <a href="{{ route('post.create') }}" class='list-group-item {{ url()->current() == route('home') ? '' : 'active' }}'>
         <span class="sidebar-font">
             <i class="fas fa-pen-nib pr-2"></i>
             新規投稿
         </span>
     </a>
 </div>
