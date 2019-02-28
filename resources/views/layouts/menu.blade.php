@if(Request::is('analytics*'))
<li class="header">DASHBOARD</li>

<li class="{{ Request::is('analytics*') ? 'active' : '' }}">
    <a href="{!! url('analytics') !!}"><i class="fa fa-area-chart"></i><span>Analytics</span></a>
</li>
@endif

@if(Request::is('assets*'))
<li class="header">MANAGEMENT</li>

<li class="{{ Request::is('assets*') ? 'active' : '' }}">
    <a href="{!! url('assets') !!}"><i class="fa fa-folder-open"></i><span>Assets</span></a>
</li>
@endif

@role(['superadministrator'])
@if(Request::is('users*') or Request::is('profiles*') or Request::is('roles*') or Request::is('permissions*'))
<li class="header">MANAGEMENT</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-edit"></i><span>Profiles</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-road"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}"><i class="fa fa-ticket"></i><span>Permissions</span></a>
</li>
@endif
@endrole

@role(['superadministrator','administrator'])
@if(Request::is('settings*'))
<li class="header">CONFIGURATION</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{!! route('settings.index') !!}"><i class="fa fa-cog"></i><span>Settings</span></a>
</li>
@endif
@endrole

{{--@if(
    Request::is('admin/pages*') or
    Request::is('admin/posts*') or
    Request::is('admin/presentations*') or
    Request::is('admin/components*') or
    Request::is('menu-manager*') or
    Request::is('admin/categories*') or
    Request::is('admin/types*') or
    Request::is('admin/businesses*') or
    Request::is('admin/dataSources*') or
    Request::is('admin/dbQueries*') or
    Request::is('admin/apiQueries*') or
    Request::is('admin/dataSets*')
)
<li class="header">CONTENTS</li>

<li class="{{ Request::is('admin/pages*') ? 'active' : '' }}">
    <a href="{!! route('admin.pages.index') !!}"><i class="fa fa-square"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">
    <a href="{!! route('admin.posts.index') !!}"><i class="fa fa-sticky-note"></i><span>Posts</span></a>
</li>
<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{!! route('admin.banners.index') !!}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>


<li class="header">LAYOUTS</li>

<li class="{{ Request::is('admin/presentations*') ? 'active' : '' }}">
    <a href="{!! route('admin.presentations.index') !!}"><i class="fa fa-sitemap"></i><span>Presentations</span></a>
</li>

<li class="{{ Request::is('admin/components*') ? 'active' : '' }}">
    <a href="{!! route('admin.components.index') !!}"><i class="fa fa-paperclip"></i><span>Components</span></a>
</li>

<li class="header">TAXONOMY</li>

<li class="{{ Request::is('menu-manager*') ? 'active' : '' }}">
    <a href="{!! url('menu-manager') !!}"><i class="fa fa-bars"></i><span>Menus</span></a>
</li>

<li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
    <a href="{!! route('admin.categories.index') !!}"><i class="fa fa-tree"></i><span>Category</span></a>
</li>

<li class="{{ Request::is('admin/types*') ? 'active' : '' }}">
    <a href="{!! route('admin.types.index') !!}"><i class="fa fa-ticket"></i><span>Types</span></a>
</li>

<li class="header">MODULE</li>

<li class="{{ Request::is('admin/businesses*') ? 'active' : '' }}">
    <a href="{!! route('admin.businesses.index') !!}"><i class="fa fa-magic"></i><span>Businesses</span></a>
</li>

<li class="{{ Request::is('admin/dataSources*') ? 'active' : '' }}">
    <a href="{!! route('admin.dataSources.index') !!}"><i class="fa fa-database"></i><span>Data Sources</span></a>
</li>

<li class="{{ Request::is('admin/dbQueries*') ? 'active' : '' }}">
    <a href="{!! route('admin.dbQueries.index') !!}"><i class="fa fa-inbox"></i><span>Db Queries</span></a>
</li>

<li class="{{ Request::is('admin/apiQueries*') ? 'active' : '' }}">
    <a href="{!! route('admin.apiQueries.index') !!}"><i class="fa fa-inbox"></i><span>Api Queries</span></a>
</li>

<li class="{{ Request::is('admin/dataSets*') ? 'active' : '' }}">
    <a href="{!! route('admin.dataSets.index') !!}"><i class="fa fa-edit"></i><span>Data Sets</span></a>
</li>

<li class="header">RELATION</li>

<li class="{{ Request::is('admin/parameters*') ? 'active' : '' }}">
    <a href="{!! route('admin.parameters.index') !!}"><i class="fa fa-adjust"></i><span>Parameters</span></a>
</li>
@endif--}}



@if( Request::is('admin/banners*') or
     Request::is('articles*') or
     Request::is('visiMisis*') or
     Request::is('dosens*') or
     Request::is('sambutans*') or
     Request::is('jurnals*') or
     Request::is('bukus*') or
     Request::is('kalenders*') or
     Request::is('fakultas*') or
     Request::is('events*')
     )
<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{!! route('admin.banners.index') !!}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>


<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

<li class="{{ Request::is('visiMisis*') ? 'active' : '' }}">
    <a href="{!! route('visiMisis.index') !!}"><i class="fa fa-edit"></i><span>Visi Misi</span></a>
</li>
<li class="{{ Request::is('dosens*') ? 'active' : '' }}">
    <a href="{!! route('dosens.index') !!}"><i class="fa fa-edit"></i><span>Dosen</span></a>
</li>

<li class="{{ Request::is('sambutans*') ? 'active' : '' }}">
    <a href="{!! route('sambutans.index') !!}"><i class="fa fa-edit"></i><span>Sambutan</span></a>
</li>

<li class="{{ Request::is('jurnals*') ? 'active' : '' }}">
    <a href="{!! route('jurnals.index') !!}"><i class="fa fa-edit"></i><span>Jurnal</span></a>
</li>

<li class="{{ Request::is('bukus*') ? 'active' : '' }}">
    <a href="{!! route('bukus.index') !!}"><i class="fa fa-edit"></i><span>Buku</span></a>
</li>

<li class="{{ Request::is('kalenders*') ? 'active' : '' }}">
    <a href="{!! route('kalenders.index') !!}"><i class="fa fa-edit"></i><span>Kalender</span></a>
</li>

<li class="{{ Request::is('fakultas*') ? 'active' : '' }}">
    <a href="{!! route('fakultas.index') !!}"><i class="fa fa-edit"></i><span>Fakultas</span></a>
</li>
<li class="{{ Request::is('events*') ? 'active' : '' }}">
    <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>Events</span></a>
</li>

@endif




