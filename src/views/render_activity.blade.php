@if (isset($prefix))
    @if (array_key_exists('activities', $activity))
        @include("aggregated_activity.{$prefix}_{$activity['verb']}", array('activity'=>$activity))
    @else
        @include("/activity.{$prefix}_{$activity['verb']}", array('activity'=>$activity))
    @endif
@else
    @if (array_key_exists('activities', $activity))
        @include("aggregated_activity.{$activity['verb']}", array('activity'=>$activity))
    @else
        @include("/activity.{$activity['verb']}", array('activity'=>$activity))
    @endif
@endif
