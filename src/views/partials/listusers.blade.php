<div class="users-list">
  <div class="row row-thead" style="background-color: #27a9e3;color: #fff;font-weight: bold;padding: 0.5rem;font-size: 1.2rem;">
    <div class="col col-md-1">
      <input type="checkbox" name="list-users-all" value="all">
    </div>
    <div class="col col-md-2">
      ID
    </div>
    <div class="col col-md-3">
      NAME
    </div>
    <div class="col col-md-3">
      EMAIL
    </div>
    <div class="col col-md-3">
      ROLE
    </div>
  </div>
  @foreach($users as $k => $user)
  <a href="/{{ Config::get('usermanage.usermanage_url') }}/edit?user={{ \Crypt::encryptString($user->id) }}">
    <div class="row row-{{ $user->id }} unique-user" style="padding: 0.7rem;">
        <div class="col col-md-1">
          <input type="checkbox" name="list-users[]" value="{{ $user->id }}">
        </div>
        <div class="col col-md-2">
          {{ $user -> id }}
        </div>
        <div class="col col-md-3">
          {{ $user -> name }}
        </div>
        <div class="col col-md-3">
          {{ $user -> email }}
        </div>
        <div class="col col-md-3">
          {{ $user->role }}
        </div>
    </div>
  </a>
  @endforeach
  <div class="pagination-links">
    {{ $users->links() }}
  </div>
</div>
