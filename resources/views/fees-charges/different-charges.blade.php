<x-Frontend.Layouts.Master>
    <section class="course-section pt_50 pb_50 bg-color-1">
        <div class="auto-container">
            <h1 class="text-center mt-4 font-weight-bold">
                {{ __('Different Charges: AFGL') }}
            </h1>
            <div class="container mt-4 mb-5">
                {{-- Responsive wrapper --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-success align-middle mb-0">
                        <thead class="font-weight-bold bg-success">
                            <tr>
                                <th colspan="2">Categories</th>
                                <th>Driving Range (50 Balls)</th>
                                <th>Training Session (50 Balls)</th>
                                <th>Golf Set (Any No of Holes)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">AFGL Members</td>
                                <td class="text-begin">BD Armed Forces Officers</td>
                                <td>30.00</td>
                                <td>100.00</td>
                                <td>100.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">Other Members</td>
                                <td>50.00</td>
                                <td>150.00</td>
                                <td>200.00</td>
                            </tr>
                            <tr>
                                <td>Honorary Members</td>
                                <td class="text-begin"></td>
                                <td>N/A</td>
                                <td>100.00</td>
                                <td>100.00</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Member of other BD Golf Club</td>
                                <td class="text-begin">BD Armed Forces Officers</td>
                                <td>50.00</td>
                                <td>120.00</td>
                                <td>150.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">BD Civil Govt Officers</td>
                                <td>80.00</td>
                                <td>150.00</td>
                                <td>200.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">Other Bangladeshi Persons</td>
                                <td>100.00</td>
                                <td>300.00</td>
                                <td>250.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">Diplomat & Foreigners</td>
                                <td>120.00</td>
                                <td>400.00</td>
                                <td>300.00</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Non-Member</td>
                                <td class="text-begin">BD Armed Forces Officers</td>
                                <td>70.00</td>
                                <td>150.00</td>
                                <td>200.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">BD Civil Govt Officers</td>
                                <td>100.00</td>
                                <td>200.00</td>
                                <td>250.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">Other Bangladeshi Persons</td>
                                <td>120.00</td>
                                <td>400.00</td>
                                <td>300.00</td>
                            </tr>
                            <tr>
                                <td class="text-begin">Diplomate & Foreigners</td>
                                <td>150.00</td>
                                <td>500.00</td>
                                <td>350.00</td>
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
