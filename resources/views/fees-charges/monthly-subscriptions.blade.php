<x-Frontend.Layouts.Master>
    <section class="course-section pt_50 pb_50 bg-color-1">
        <div class="auto-container">
            <h1 class="text-center mt-4 font-weight-bold">
                {{ __('Monthly Subscriptions: AFGL') }}
            </h1>
    
            <div class="container mt-4 mb-5">
                {{-- Responsive wrapper --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-success align-middle mb-0">
                        <thead class="font-weight-bold bg-success">
                            <tr>
                                <th rowspan="2">Ser No</th>
                                <th rowspan="2">Type of Member</th>
                                <th colspan="4">Monthly Subscription</th>
                            </tr>
                            <tr>
                                <th>Single</th>
                                <th>Family</th>
                                <th>UCM</th>
                                <th>Silent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-start">BD Armed Forces Officers (Serving/Retired)</td>
                                <td>400.00</td>
                                <td>450.00</td>
                                <td>550.00</td>
                                <td>90.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-start">Honorary & Life Members</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-start">BD Govt. Civil Officers</td>
                                <td>900.00</td>
                                <td>1000.00</td>
                                <td>1200.00</td>
                                <td>200.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-start">BD Civil Persons</td>
                                <td>1900.00</td>
                                <td>2100.00</td>
                                <td>2500.00</td>
                                <td>420.00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-start">Corporate Members</td>
                                <td>1700.00</td>
                                <td>1900.00</td>
                                <td>2300.00</td>
                                <td>380.00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-start">Children of BD Armed Forces Members</td>
                                <td>1500.00</td>
                                <td>1700.00</td>
                                <td>2000.00</td>
                                <td>340.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="text-start">Children of BD Govt. Civil Members</td>
                                <td>1900.00</td>
                                <td>2100.00</td>
                                <td>2500.00</td>
                                <td>420.00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="text-start">Children of BD Civil Members</td>
                                <td>1900.00</td>
                                <td>2100.00</td>
                                <td>2500.00</td>
                                <td>420.00</td>
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
