{{ Form::model($role, array('route' => array('roles.update', $role->id),'method'  => 'PUT', 'files'=> true, 'id' => 'edit-role')) }}
  @include('roles._form')
{{ Form::close() }}
