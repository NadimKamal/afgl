<x-Frontend.Layouts.Master>
    <section class="course-section pt_50 pb_50 bg-color-1">
        <div class="auto-container">
            <h1 class="text-center mt-4 font-weight-bold">
                {{ __('Different Fees: AFGL') }}
            </h1>
    
            <div class="container mt-4 mb-5">
                {{-- Responsive wrapper --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-success align-middle mb-0">
                        <thead class="font-weight-bold bg-success">
                            <tr>
                                <th rowspan="2" colspan="2">Categories</th>
                                <th colspan="2">Green Fee</th>
                                <th colspan="2">Caddy Fee</th>
                            </tr>
                            <tr>
                                <th>09 Hole</th>
                                <th>18 Hole</th>
                                <th>09 Hole</th>
                                <th>18 Hole</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">AFGL Members</td>
                                <td class="text-start">BD Armed Forces Officers</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>100.00</td>
                                <td>200.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">Other Members</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td>Honorary Members</td>
                                <td class="text-start"></td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Member of other BD Golf Club</td>
                                <td class="text-start">BD Armed Forces Officers</td>
                                <td>100.00</td>
                                <td>150.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">BD Civil Govt Officers</td>
                                <td>200.00</td>
                                <td>350.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">Other Bangladeshi Person</td>
                                <td>400.00</td>
                                <td>650.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">Diplomat & Foreigners</td>
                                <td>700.00</td>
                                <td>1,100.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Non-Member</td>
                                <td class="text-start">BD Armed Forces Officers</td>
                                <td>300.00</td>
                                <td>450.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">BD Civil Govt Officers</td>
                                <td>500.00</td>
                                <td>700.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">Other Bangladeshi Persons</td>
                                <td>700.00</td>
                                <td>1,000.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                            <tr>
                                <td class="text-start">Diplomat & Foreigners</td>
                                <td>900.00</td>
                                <td>1,500.00</td>
                                <td>300.00</td>
                                <td>550.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    <x-Frontend.Sections.NextLevel />
    @push('css')
    <style>
        .table th, .table td {
            vertical-align: middle;
            white-space: nowrap;
        }
    </style>
    @endpush
</x-Frontend.Layouts.Master>
