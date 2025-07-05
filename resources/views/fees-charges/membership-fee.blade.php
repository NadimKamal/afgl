<x-Frontend.Layouts.Master>
    <section class="course-section pt_140 pb_150 bg-color-1">
        <div class="auto-container">
            <h1 class="text-center mt-4 font-weight-bold">
                {{ __('Membership Fee: AFGL') }}
            </h1>
            <div class="container mt-4 mb-5">
                <table class="table table-bordered table-striped text-center table-success">
                    <thead class="font-weight-bold bg-success">
                        <tr>
                            <th width="10%">Ser No</th>
                            <th width="60%">Categories of Member</th>
                            <th width="30%">Membership Fee/Pers (Tk)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-begin">BD Armed Forces Officers (Serving, LPR and Retired)</td>
                            <td>10,000.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-begin">Serving BD Govt. Civil Officers (7th grade & above)</td>
                            <td>1,00,000.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-begin">BD Civil Persons</td>
                            <td>10,00,000.00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-begin">Corporate Member (<strong>at least 05 members of an organization at a time</strong>)
                            </td>
                            <td>7,00,000.00</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-begin">Honorary & Complementary Membership</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-begin">Life Member; BD Armed Forces Officers</td>
                            <td>5,00,000.00</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="text-begin">Life Member; BD Govt. Civil Officers</td>
                            <td>15,00,000.00</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="text-begin">Life Member; Bangladeshi Civil Persons</td>
                            <td>30,00,000.00</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="text-begin">Children of BD Armed Forces Members (Age: 25 to 28 yrs)</td>
                            <td>30,000.00</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="text-begin">Children of BD Armed Forces Members (Age: More than 28 yrs)</td>
                            <td>50,000.00</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td class="text-begin">Children of BD Govt. Civil Members (Age: 25 to 28 yrs)</td>
                            <td>2,00,000.00</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td class="text-begin">Children of BD Govt. Civil Members (Age: More than 28 yrs)</td>
                            <td>3,00,000.00</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td class="text-begin">Children of BD Civil Members (Age: 25 to 28 yrs)</td>
                            <td>4,00,000.00</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td class="text-begin">Children of BD Civil Members (Age: More than 28 yrs)</td>
                            <td>5,00,000.00</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td class="text-begin">Single Senior Citizen</td>
                            <td>2,50,000.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <x-Frontend.Sections.NextLevel />
    @push('css')
        <style>
            th{
                padding-top: 12px !important;
                padding-bottom: 12px !important;
            }
            .text-begin{
                text-align: left;
            }
        </style>
    @endpush
</x-Frontend.Layouts.Master>
