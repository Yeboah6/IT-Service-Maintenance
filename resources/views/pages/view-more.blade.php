<x-app-layout>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: 170px;">
        <h1 style="margin-top: 30px;">Personel Details</h1>
        <div class="list-container">
            <ul class="list-service">
                <li>Service Number</li>
                <li>Cvef2234</li>
            </ul>

            <ul class="list-name">
                <li>Name</li>
                <li>Solomon</li>
            </ul>
            <ul class="list-number">
                <li>Number</li>
                <li>14314342234</li>
            </ul>
        </div>

        <h1 style="margin-top: 60px;">Incident Details</h1>
        <ul class="ticket">
                    <li>Ticket No.</li>
                    <li>TK5050</li>
                </ul>
                <ul class="issueType">
                    <li>Issue Type</li>
                    <li>Hardware</li>
                </ul>
                <ul class="issue">
                    <li>Issue</li>
                    <li>Can't connect to Wi-Fi</li>
                </ul>
                <ul class="urgency">
                    <li>Urgency</li>
                    <li>High</li>
                </ul>
                <ul class="from">
                    <li>From</li>
                    <li>Programming Cell</li>
                </ul>
                <ul class="assignTo">
                    <li>Assigned To</li>
                    <li>Philip</li>
                </ul>
        <!-- <div class="incident-details">
            <div class="inner-display">
                <ul class="ticket">
                    <li>Ticket No.</li>
                    <li>TK5050</li>
                </ul>
                <ul class="issueType">
                    <li>Issue Type</li>
                    <li>Hardware</li>
                </ul>
                <ul class="issue">
                    <li>Issue</li>
                    <li>Can't connect to Wi-Fi</li>
                </ul>
            </div>
            <div class="middle-display">
                <ul class="urgency">
                    <li>Urgency</li>
                    <li>High</li>
                </ul>
                <ul class="from">
                    <li>From</li>
                    <li>Programming Cell</li>
                </ul>
                <ul class="assignTo">
                    <li>Assigned To</li>
                    <li>Philip</li>
                </ul>
            </div>
        </div> -->
            <ul class="description">
                <li>Description</li>
                <li>ihgrhrmb r bjior iojr ib iiiioil j ijoijfpowe wwj jwihwofof</li>
            </ul>
        <div class="assigned-details">
            <h3></h3>
            <h3>Reported By</h3>
        </div>
        </div>
    </div>
</div>

</x-app-layout>

<style>

    .incident-details {
        border: 1px solid red;
    }

    .list-container {
        display: flex; 
        border: 1px solid red;
        justify-content: space-around;
    }

    .list-service {
        display: flex;

    }

    .list-service li {
      margin: 15px;
    }

    .list-name  {
        display: flex;
  

    }

    .list-name li {
        margin: 15px;
    }

    .list-number {
        display: flex;
    }

    .list-number li {
        margin: 15px;
    }

    li:first-of-type {
        font-weight: bold;
        font-size: 1rem;
    }

    .incident-details li{
        margin: 10px;
    }

    .inner-display {
        display: flex;
        /* border: 1px solid red; */
        justify-content: space-around;
    }

    .ticket {
        display: flex;
    }

    .issueType {
        display: flex;
    }

    .issue {
        display: flex;
    }

    .middle-display {
        display: flex;
        /* border: 1px solid red; */
        justify-content: space-around;
    }

    .urgency {
        display: flex;
    }

    .from {
        display: flex;
    }

    .assignTo {
        display: flex;
    }

    h1{
        font-size: 1.5rem;
        font-weight: bold;
        padding: 10px;
        margin-left: 10px;
        /* margin-top: 50px; */
    }
</style>