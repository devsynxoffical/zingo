{{-- Merged from /blog/can-an-unlicensed-assistant-make-cold-calls-in-texas (301) --}}
@php
    $calls = [
        ['Calling expireds, FSBOs or a farm to ask if they want to sell', 'No', 'Solicitation. Only a license holder may do it.'],
        ['Calling a new lead to ask if they want to buy and booking them with an agent', 'No', 'TREC includes calls made to set up an appointment with a license holder.'],
        ['Arranging a showing for the agent who will show the property', 'Yes', 'The license holder conducts the showing.'],
        ['Confirming the advertised size, price or terms of a listing', 'Yes', 'Only if the assistant says they are unlicensed; anything more goes to a licensee.'],
        ['Discussing price, value, terms or a contract', 'No', 'Refer the caller to a license holder.'],
    ];
@endphp
                            <h3>Which calls are allowed in Texas</h3>
                            <div class="guide-table-wrap">
                                <table class="guide-table">
                                    <thead><tr><th>Call</th><th>Unlicensed assistant?</th><th>Why</th></tr></thead>
                                    <tbody>
                                        @foreach ($calls as $c)
                                            <tr><td>{{ $c[0] }}</td><td><strong>{{ $c[1] }}</strong></td><td>{{ $c[2] }}</td></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <h3>What an unlicensed assistant can do in Texas</h3>
                            <ul class="guide-list">
                                <li>Administrative work such as data entry and typing contracts at a license holder&#39;s direction.</li>
                                <li>Bookkeeping and office tasks. Only a license holder may be authorized to withdraw or transfer money from a trust account.</li>
                                <li>Arrange showing appointments for the license holder who will show the property.</li>
                                <li>Confirm the size, price and terms of an advertised property, after saying they are unlicensed.</li>
                            </ul>

                            <h3>What needs a Texas license</h3>
                            <ul class="guide-list">
                                <li>Soliciting buyers, sellers, landlords or tenants, including calls to see whether someone wants to buy, sell or lease.</li>
                                <li>Showing property, giving a prospective buyer or tenant access to a property, or hosting an open house.</li>
                                <li>Reviewing contracts or facilitating a transaction.</li>
                                <li>Directing or supervising agents in their licensed work.</li>
                            </ul>
                            <p>TREC can discipline the broker and agents who use unlicensed help for licensed work, and the unlicensed person can face criminal charges. TREC also recommends written guidelines for agents and unlicensed staff.</p>

                            <h3>How Texas agents staff prospecting instead</h3>
                            <ol class="guide-list" style="padding-left:20px;">
                                <li style="list-style:decimal;"><strong>Use a licensed caller.</strong> A Texas sales agent sponsored by your broker can work as your inside sales agent and make prospecting and lead follow-up calls.</li>
                                <li style="list-style:decimal;"><strong>Give the unlicensed assistant everything around the calls:</strong> list preparation, CRM updates, showing appointments, confirmations, listing and transaction paperwork.</li>
                                <li style="list-style:decimal;"><strong>Follow telemarketing law as well.</strong> Federal Do Not Call and TCPA rules apply to every call, licensed or not.</li>
                                <li style="list-style:decimal;"><strong>Write it down.</strong> A one-page list of what your assistant may and may not say on the phone protects you and them.</li>
                            </ol>
                            <p>The rules are different in other states. Compare them in <a href="{{ route('rules.hub') }}">what can an unlicensed real estate assistant do?</a>, which covers Texas, Florida, California, Georgia, Arizona and North Carolina.</p>

