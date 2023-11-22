<x-app-layout>
    <div class="resolved-container" id="cardId">
        <div class="py-12" style="margin-left: 2px;margin-top:100px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 45px;margin-left:230px">
                    <div class="container wrapper">
                        <div class="table-wrapper" style="font-size: 0.9rem;margin-top: 25px;">
                            <div class="table">
                                <table class="table table-bordered table-striped" >
                                    <thead>
                                       <th>Reporter Name</th>
                                       <th>Issue Type</th>
                                       <th>Issue</th>
                                       <th>Urgency</th>
                                       <th>Description</th>
                                       <th>Status</th>
                                       <th>From (Department)</th>
                                       <th>Department</th>
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
  .resolved-container {
    position: relative;
    top: -140.8px;
    height: 150px;
    width: 100%;
    background-color: red;
    transition: 0.5s;
}
</style>