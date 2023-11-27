<x-app-layout>
<div class="userPending-container" id="cardId">
<div class="py-12" style="margin-top: 90px;">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: 50px;margin-top: -40px;">
            <div class="container wrapper">
                <div class="table-wrapper" style="margin-top: 30px;font-size:0.9rem;">
                    <div class="table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Reporter Name</th>
                                <th>Issue Type</th>
                                <th>Issue</th>
                                <th>Urgency</th>
                                <th>Status</th>
                                <th>Summary</th>
                                <th>From (Department)</th> 
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</x-app-layout>

<style>
.userPending-container {
    position: absolute;
    top: 64px;
    height: 150px;
    width: 83.9%;
    background-color: #1995AD;
    left: 220px;
}

</style>