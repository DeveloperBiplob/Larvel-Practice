<div>
    <div class="alert alert-{{ $type }}" role="alert">
        This is a primary alert—check it out!
      </div>
      <div class="">
          @foreach ($users as $user)
              <span class="badge badge-primary">{{ $user->name }}</span>
          @endforeach
      </div>
</div>
