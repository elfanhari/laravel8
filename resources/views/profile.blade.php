<x-app-layout :title=" $username ?? 'Profile'">
  <h1>{{ $username ?? 'Profile' }}</h1>
  {{ $slug }}
</x-app-layout>
