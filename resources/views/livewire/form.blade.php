<div>
    {{ json_encode($state) }}
   @if ($step === 1) <livewire:import-or-export> @endif
    @if ($step === 2) <livewire:import-problems> @endif
    @if ($step === 3) <livewire:export-problems> @endif
    @if ($step === 4) <livewire:cron-problems> @endif

    <!-- results for Imports -->
    @if ($step === 5) <livewire:results.stuck-database> @endif
    @if ($step === 6) <livewire:results.appearance-problems> @endif
    @if ($step === 7) <livewire:results.problem-login-after-import> @endif
    @if ($step === 8) <livewire:results.incorrect-character> @endif
    @if ($step === 9) <livewire:results.permission-problems> @endif

    <!-- results for Exports -->
    @if ($step === 10) <livewire:results.export-start-butfails> @endif
    @if ($step === 11) <livewire:results.out-of-disk-space> @endif
    @if ($step === 12) <livewire:results.refresh-page-try-again> @endif
    @if ($step === 13) <livewire:results.stuck-preparing-to-export> @endif
</div>
