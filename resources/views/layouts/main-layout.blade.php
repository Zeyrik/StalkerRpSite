<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 
        !isset(App\Services\WebConfig\Service::getWeb()->name)
        ? 'StalkerRP'
        :  $title.' | '. App\Services\WebConfig\Service::getWeb()->name 
    }}
     </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{App\Services\WebConfig\Service::getWeb()->icon ?? 'data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAB01+gAAAAAAAXC4wDr8/UAtsnMAA/n8gBNzeMA2OHjAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAESYAJgJgERERJgAmAmARERElACZycCIiESV2dnJwd3IRJXJ2cnARchEmcnJycBFyESZydnVwEXIRJXJ1dXARchElcnVycBFyESUCJXJwEXIRJQIlcmB3chEiIiIiIiIiESVVVVUicRERREMzMzRxERFDMzMzNBEREUREREREERHADwAAwA8AAMAAAADAAAAAwAwAAMAMAADADAAAwAwAAMAMAADADAAAwAAAAMAAAADABwAAwAcAAMAPAADADwAA' }}" rel="icon" type="image/x-icon">
</head>
<body class='bg-[#202123]' >
    <div class="flex flex-col h-screen">
        <x-header/>
        <div class="grow bg-[#202123]" >
            <div class="container p-[60px] mx-auto rounded-[23px] h-full bg-[#29262d]">
                {{ $content }}
            </div>
                
        </div>
        <x-footer/>
    </div>
</body>
</html>