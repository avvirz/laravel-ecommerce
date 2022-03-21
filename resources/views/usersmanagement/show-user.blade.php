@extends('layouts.admin.app')

@section('template_title')
    {!! trans('usersmanagement.showing-user', ['name' => $user->name]) !!}
@endsection

@php
$levelAmount = trans('usersmanagement.labelUserLevel');
if ($user->level() >= 2) {
    $levelAmount = trans('usersmanagement.labelUserLevels');
}
@endphp

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 mt-4">
        <div class="card">
          <div class="card-header text-white @if ($user->activated == 1) bg-success @else bg-danger @endif">
            <div class="displayUser">
              {!! trans('usersmanagement.showing-user-title', ['name' => $user->name]) !!}
              <div class="float-right">
                <a href="{{ route('users') }}" class="btn btn-light btn-sm float-right"
                    data-toggle="tooltip" data-placement="left"
                    title="{{ trans('usersmanagement.tooltips.back-users') }}">
                    <i class="fas fa-reply-all fa-fw " aria-hidden="true"></i>
                    {!! trans('usersmanagement.buttons.back-to-users') !!}
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 col-md-12 text-center ">
                <img src="@if ($user->profile && $user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif"
                  alt="{{ $user->name }}" height="100" width="100"
                  class="rounded-circle center-block mb-3 mt-4 user-image">
              </div>
              <div class="col-sm-12 col-md-12">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                    {{ $user->name }}
                </h4>
                <p class="text-center text-left-tablet">
                    <strong>
                        {{ $user->first_name }} {{ $user->last_name }}
                    </strong>
                    @if ($user->email)
                        <br />
                        <span class="text-center" data-toggle="tooltip" data-placement="top"
                            title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $user->email]) }}">
                            {{ Html::mailto($user->email, $user->email) }}
                        </span>
                    @endif
                </p>
                @if ($user->profile)
                  <div class="text-center text-left-tablet mb-4">
                    <a href="{{ url('/profile/' . $user->name) }}" class="btn btn-sm btn-info mb-2"
                        data-toggle="tooltip" data-placement="left"
                        title="{{ trans('usersmanagement.viewProfile') }}">
                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span
                            class="hidden-xs hidden-sm hidden-md">
                            {{ trans('usersmanagement.viewProfile') }}</span>
                    </a>
                    <a href="/users/{{ $user->id }}/edit" class="btn btn-sm btn-warning mb-2"
                        data-toggle="tooltip" data-placement="top"
                        title="{{ trans('usersmanagement.editUser') }}">
                        <i class="fas fa-edit fa-fw" aria-hidden="true"></i> <span
                            class="hidden-xs hidden-sm hidden-md">
                            {{ trans('usersmanagement.editUser') }} </span>
                    </a>
                    {!! Form::open(['url' => 'users/' . $user->id, 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('usersmanagement.deleteUser')]) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::button('<i class="fas fa-trash fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('usersmanagement.deleteUser') . '</span>', ['class' => 'btn btn-danger btn-sm', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?']) !!}
                    {!! Form::close() !!}
                  </div>
                @endif
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="border-bottom"></div>
            @if ($user->name)
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                    {{ trans('usersmanagement.labelUserName') }}
                </strong>
              </div>
              <div class="col-sm-7">
                {{ $user->name }}
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
            @if ($user->email)
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelEmail') }}
                </strong>
              </div>
              <div class="col-sm-7">
                <span data-toggle="tooltip" data-placement="top"
                  title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $user->email]) }}">
                  {{ HTML::mailto($user->email, $user->email) }}
                </span>
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
            @if ($user->first_name)
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                    {{ trans('usersmanagement.labelFirstName') }}
                </strong>
              </div>
              <div class="col-sm-7">
                  {{ $user->first_name }}
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
            @if ($user->last_name)
              <div class="col-sm-5 col-6 text-larger">
                  <strong>
                      {{ trans('usersmanagement.labelLastName') }}
                  </strong>
              </div>
              <div class="col-sm-7">
                  {{ $user->last_name }}
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
            <div class="col-sm-5 col-6 text-larger">
              <strong>
                  {{ trans('usersmanagement.labelRole') }}
              </strong>
            </div>
            <div class="col-sm-7">
              @foreach ($user->roles as $user_role)
                @if ($user_role->name == 'User')
                  @php $badgeClass = 'primary' @endphp
                @elseif ($user_role->name == 'Admin')
                  @php $badgeClass = 'warning' @endphp
                @elseif ($user_role->name == 'Unverified')
                  @php $badgeClass = 'danger' @endphp
                @else
                  @php $badgeClass = 'default' @endphp
                @endif

                <span class="badge badge-{{ $badgeClass }}">{{ $user_role->name }}</span>
              @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="border-bottom"></div>
            @if ($user->created_at)
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelCreatedAt') }}
                </strong>
              </div>
              <div class="col-sm-7">
                {{ $user->created_at }}
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
            @if ($user->updated_at)
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelUpdatedAt') }}
                </strong>
              </div>
              <div class="col-sm-7">
                {{ $user->updated_at }}
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('modals.modal-delete')
@endsection
@section('footer_scripts')
  @include('scripts.delete-modal-script')
  @if (config('usersmanagement.tooltipsEnabled'))
    @include('scripts.tooltips')
  @endif
@endsection
