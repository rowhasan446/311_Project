<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with DaisyUI</title>
    <!-- Include DaisyUI and Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar bg-blue-500">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="index.php">Coordinator</a></li>
                    <li><a href="event.php">Event</a></li>
                    <li><a href="guests.php">Guests</a></li>
                    <li><a href="judge.php">Judge</a></li>
                    <li><a href="judge_assignment.php">Judge Assignment</a></li>
                    <li><a class="active" href="participants.php">Participants</a></li>
                    <li><a href="position.php">Position</a></li>
                    <li><a href="prizes.php">Prizes</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="result.php">Result</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li><a href="school.php">School</a></li>
                    <li><a href="segment.php">Segment</a></li>
                    <li><a href="venue.php">Venue</a></li>
                    <li><a href="winner.php">Winner</a></li>
                </ul>
            </div>
            <a href="#" class="btn btn-ghost text-xl">Cultural Carnival</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                
                <li>
                    <details>
                        <summary>Options-1</summary>
                        <ul class="p-2">
                        <li><a href="index.php">Coordinator</a></li>
                        <li><a href="event.php">Event</a></li>
                        <li><a href="guests.php">Guests</a></li>
                        <li><a href="judge.php">Judge</a></li>
                        <li><a href="judge_assignment.php">Judge Assignment</a></li>
                        
                        </ul>
                    </details>
                </li>

                <li>
                    <details>
                        <summary>Options-2</summary>
                        <ul class="p-2">
                        
                        <li><a class="active" href="participants.php">Participants</a></li>
                        <li><a href="position.php">Position</a></li>
                        <li><a href="prizes.php">Prizes</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="result.php">Result</a></li>
                        
                        </ul>
                    </details>
                </li>


                <li>
                    <details>
                        <summary>Options-3</summary>
                        <ul class="p-2">
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="school.php">School</a></li>
                        <li><a href="segment.php">Segment</a></li>
                        <li><a href="venue.php">Venue</a></li>
                        <li><a href="winner.php">Winner</a></li>
                        </ul>
                    </details>
                </li>
                
            </ul>
        </div>
        <div class="navbar-end">
            <a href="#" class="px-3 py-2 bg-red-500 rounded-xl">Logout</a>
        </div>
    </div>
</body>
</html>
