<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Flight
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('sicks.update', $sick->severity_level_id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="severity_name" class="block font-medium text-sm text-gray-700">疫情名稱</label>
                            <select class="form-select" name="_severity_name">
                                        @foreach($sopts as $opt)
                                            @if ($opt->severity_level_id == $sick->severity_level_id)
                                                <option selected value={{ $opt->severity_level_id}}>
                                                        {{ $opt->severity_level}}
                                                </option>
                                            @else
                                            <option value={{ $opt->severity_level_id}}>
                                                    {{ $opt->severity_level}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="country_name" class="block font-medium text-sm text-gray-700">國家</label>
                            <select class="form-select" name="_country_name">
                                        @foreach($copts as $opt)
                                            @if ($opt->country_id == $sick->country_id)
                                                <option selected value={{ $opt->country_id}}>
                                                        {{ $opt->country_name}}
                                                </option>
                                            @else
                                            <option value={{ $opt->country_id}}>
                                                    {{ $opt->country_name}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_year" class="block font-medium text-sm text-gray-700">年</label>
                            <select class="form-select" name="_year">
                                        @foreach($yopts as $opt)
                                            @if ($opt->year_id == $sick->year_id)
                                                <option selected value={{ $opt->year_id}}>
                                                        {{ $opt->year_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->year_id}}>
                                                    {{ $opt->year_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_month" class="block font-medium text-sm text-gray-700">月</label>
                            <select class="form-select" name="_month">
                                        @foreach($mopts as $opt)
                                            @if ($opt->month_id == $sick->month_id)
                                                <option selected value={{ $opt->month_id}}>
                                                        {{ $opt->month_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->month_id}}>
                                                    {{ $opt->month_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_day" class="block font-medium text-sm text-gray-700">日</label>
                            <select class="form-select" name="_day">
                                        @foreach($dopts as $opt)
                                            @if ($opt->day_id == $sick->day_id)
                                                <option selected value={{ $opt->day_id}}>
                                                        {{ $opt->day_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->day_id}}>
                                                    {{ $opt->day_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>

                                   
                            @error('status')
                                <p class="text-sm text-red-600">{{ $message  }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>