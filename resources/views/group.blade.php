<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
        <h1>
            <p>Group 1</p>
        </h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th style="padding-right:30px">
                            Level
                        </th>
                        <th style="padding-right:70px">
                            Name
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                @foreach($groups as $name)
                <tbody>
                    <tr>
                        <form method="post" action="{{ route('callName') }}">
                        @csrf
                            <td class="level" data-level="">
                                {{ $name->id }}
                            </td>
                            <td>
                                {{ $name->groupname }}
                            </td>
                            <td style="padding-right:30px">
                                <button type="submit">    
                                    Top
                                </button>
                            </td>
                            <td style="padding-right:30px">
                                <button type="submit">    
                                    Up
                                </button>
                            </td>
                            <td style="padding-right:30px">
                                <button type="submit">    
                                    Down
                                </button>
                            </td>
                            <td style="padding-right:30px">
                                <button type="submit">    
                                    Bottom
                                </button>
                            </td>
                        </form>
                    </tr>
                </tbody>
                
                @endforeach
            </table>
        </div>


            
        </div>
    </body>
    @push('js')
        <script type="text/javascript">
            
        </script>   
    @endpush
</html>
