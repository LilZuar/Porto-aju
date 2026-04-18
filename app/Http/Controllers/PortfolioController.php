<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index', [
            'title' => 'Azuar Portofolio',
            'services' => $this->services(),
            'workItems' => $this->workItems(),
            'featuredWorkItems' => array_slice($this->workItems(), 0, 3),
        ]);
    }

    public function about()
    {
        return view('portfolio.about', [
            'title' => 'About Me | Azuar Portofolio',
            'profile' => [
                'name' => 'Lazuardhi Imani Ahfar',
                'headline' => 'Mobile Developer specializing in iOS (SwiftUI) with experience building scalable applications and intelligent features such as face recognition.',
                'summary' => 'I enjoy turning ideas into apps that feel useful, reliable, and easy to use. My work usually sits at the intersection of mobile engineering, API integration, and product collaboration, and lately I have been focusing a lot on clean architecture and performance-oriented iOS development.',
                'location' => 'Tangerang, Banten, Indonesia',
                'email' => 'lazuardhiimaniahfar@gmail.com',
                'phone' => '+628111908862',
                'linkedin' => 'https://www.linkedin.com/in/lazuardhi/',
                'portfolio' => 'https://aju-portofolio.vercel.app/',
            ],
            'highlights' => [
                'Built a Flutter-based face recognition attendance system for thesis work.',
                'Delivered 5+ iOS features using SwiftUI and Clean Architecture.',
                'Integrated 10+ REST APIs and improved networking maintainability with Moya.',
                'Automated build and release flow with Fastlane and Firebase App Distribution.',
            ],
            'skills' => [
                'Mobile Development' => ['SwiftUI', 'UIKit', 'Flutter', 'Dart', 'ARKit', 'RealityKit'],
                'Architecture & Data' => ['Clean Architecture', 'Core Data', 'Combine', 'API Integration', 'MySQL', 'SQL'],
                'Tools & Workflow' => ['Git', 'Fastlane', 'Firebase App Distribution', 'Laravel', 'Requirement Analysis'],
                'Soft Skills' => ['Team Collaboration', 'Public Speaking', 'Leadership', 'Cross-functional Communication'],
            ],
            'experiences' => [
                [
                    'company' => 'Jelajah Data Semesta',
                    'role' => 'iOS Developer Internship',
                    'period' => 'Oct 2025 - Apr 2026',
                    'location' => 'Jakarta Pusat',
                    'points' => [
                        'Delivered 5+ iOS features using SwiftUI and Clean Architecture, improving modularity and reducing integration time.',
                        'Implemented Core Data and Combine to improve data handling efficiency and app responsiveness.',
                        'Integrated 10+ REST APIs using Moya to create a scalable and maintainable networking layer.',
                        'Built push notification features and supported both public and internal app distribution needs.',
                        'Automated release flow with Fastlane and Firebase App Distribution to reduce manual deployment effort.',
                        'Collaborated with cross-functional teams using Git workflows in an agile environment.',
                    ],
                ],
                [
                    'company' => 'Apple Developer Academy @ BINUS',
                    'role' => 'Junior Developer Intern',
                    'period' => 'Mar 2024 - Dec 2024',
                    'location' => 'South Tangerang',
                    'points' => [
                        'Contributed to 7+ projects, including games and functional apps, using SwiftUI, UIKit, and ARKit.',
                        'Led a team as Project Manager and pitched a finished product to Apple Singapore stakeholders.',
                        'Completed an end-to-end solo project independently from concept to implementation.',
                        'Served as Tech Lead in one project, mentoring teammates and improving code quality.',
                    ],
                ],
                [
                    'company' => 'PT Pralon',
                    'role' => 'HRIS Programmer Intern',
                    'period' => 'Mar 2023 - Mar 2024',
                    'location' => 'Tangerang',
                    'points' => [
                        'Contributed to 3 internal systems: HRIS, recruitment website, and mobile application.',
                        'Built a face recognition attendance system to improve authentication accuracy and reduce manual work.',
                        'Developed a payroll feature to support more efficient salary processing.',
                        'Received 3rd Place and Top 5 Finalist recognition in company innovation awards.',
                    ],
                ],
                [
                    'company' => 'SDMKita',
                    'role' => 'Mobile Developer Freelance',
                    'period' => 'Jun 2023 - Sep 2023',
                    'location' => 'Tangerang',
                    'points' => [
                        'Developed a client-facing mobile application using Flutter and Dart with a MySQL backend.',
                        'Translated business requirements into usable features with clear delivery priorities.',
                        'Joined stakeholder discussions and contributed to requirement analysis and product decisions.',
                    ],
                ],
            ],
            'education' => [
                [
                    'school' => 'Universitas Bina Nusantara',
                    'period' => 'Aug 2020 - Aug 2025',
                    'degree' => 'Bachelor of Computer Science',
                    'meta' => 'GPA 3.50 / 4.00',
                    'points' => [
                        'Built a face recognition attendance system as thesis work using Flutter.',
                        'Applied mobile architecture, API integration, and performance optimization in academic projects.',
                        'Completed multiple software engineering projects that strengthened system design and team collaboration.',
                    ],
                ],
            ],
            'organization' => [
                [
                    'name' => 'HMTI Binus University',
                    'period' => 'Mar 2021 - Mar 2023',
                    'location' => 'Tangerang',
                ],
            ],
        ]);
    }

    public function work()
    {
        return view('portfolio.work', [
            'title' => 'My Work | Azuar Portofolio',
            'workItems' => $this->workItems(),
        ]);
    }

    public function show(string $slug)
    {
        $work = collect($this->workItems())
            ->first(fn (array $item) => $item['slug'] === $slug);

        abort_if(! $work, 404);

        return view('portfolio.work-show', [
            'title' => $work['title'].' | Azuar Portofolio',
            'work' => $work,
        ]);
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $submission = $validated + [
            'submitted_at' => now()->toIso8601String(),
        ];

        Storage::disk('local')->append(
            'contact-submissions.jsonl',
            json_encode($submission, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        );

        return back()->with('status', 'Your message has been saved successfully.');
    }

    private function workItems(): array
    {
        $items = [
            [
                'title' => 'Sales Order Retail',
                'subtitle' => 'iOS app for managing retail sales orders at Balitower.',
                'jobDesc' => 'As an iOS Developer on the Sales Order Retail project, I delivered 5+ iOS features using SwiftUI and Clean Architecture, improving modularity and reducing feature integration time. I implemented Core Data and Combine to enhance data handling efficiency and app responsiveness, and integrated 10+ REST APIs using Moya to build a scalable and maintainable networking layer. I also implemented push notification features to boost user engagement and real-time communication, and managed app distribution across enterprise environments for both public release and internal deployment. To streamline the delivery process, I automated the build and release pipeline using Fastlane and Firebase App Distribution, reducing manual effort and accelerating testing cycles. Throughout the project, I collaborated closely with cross-functional teams via Git workflows, consistently delivering user-focused features in an agile environment.',
                'image' => 'SOR.png',
                'glide' => 'sor-glide.png',
                'description' => 'Sales Order Retail (SOR) is a feature within the Balitower iOS app that enables field sales representatives to manage retail sales orders digitally. The app streamlines the order creation and tracking process, reducing manual paperwork and improving accuracy in the sales pipeline. Built with SwiftUI and Clean Architecture, the feature integrates seamlessly with the backend through REST APIs to provide real-time order data and status updates.',
                'previews' => [],
            ],
            [
                'title' => 'Sing Eling',
                'subtitle' => 'iOS game that helps you to learn Javanese',
                'jobDesc' => 'As the Tech Lead for Sing Eling, I managed the development team and integrated the code with the overall game mechanics. I worked closely with the Project Manager and Design Lead to align our vision, brainstorm solutions, and tackle the main challenge we wanted to solve — helping students learn Javanese in a fun and interactive way.',
                'image' => 'SingEling.png',
                'glide' => 'singeling-glide.png',
                'description' => 'Sing Eling is an interactive game that makes learning Javanese fun and engaging. The app combines traditional elements of the language with modern gamification techniques, helping users develop vocabulary, grammar, and cultural insights in an enjoyable way.',
                'previews' => [],
            ],
            [
                'title' => 'Check Mate',
                'subtitle' => 'iOS app for daily reminder',
                'jobDesc' => 'As a Project Manager, I helped lead the team in building Check Mate — from planning and managing the project to jumping into development when needed. It was my first time stepping into a PM role, and I even got the chance to pitch the app to an Apple staff member from Singapore, which was an exciting experience for me.',
                'image' => 'CheckMate.png',
                'glide' => 'checkmate_glide.png',
                'description' => 'CheckMate is a location-based and time-based reminder app designed to help users keep track of important items. It’s particularly useful for individuals who frequently forget essential belongings when leaving specific locations. CheckMate leverages location detection to trigger reminders if a user exits a designated area without a specified item. Additionally, users can set reminders based on time, receiving notifications when scheduled.',
                'previews' => [],
            ],
            [
                'title' => 'Day Out',
                'subtitle' => 'iOS app to check weather for outdoor family activity',
                'jobDesc' => 'As a Full Stack Developer, I worked closely with the design team to bring their ideas into the app, integrating the UI seamlessly into iOS. I also handled the API integration for real-time weather forecasts and built a unique calendar picker to make planning outdoor family activities more fun and intuitive.',
                'image' => 'DayOut.png',
                'glide' => 'dayout-glide.png',
                'description' => 'Day Out is a weather app tailored for families planning outdoor activities. It provides up-to-date weather forecasts, ensuring users can make informed decisions about their day. The app is user-friendly and ideal for parents who want to ensure safe and enjoyable outdoor adventures for their children.',
                'previews' => [],
            ],
            [
                'title' => 'Blooma',
                'subtitle' => 'Mac app for learning tracker',
                'jobDesc' => 'As a Front-End Developer, I helped bring Blooma to life — my first experience building a Mac app. I worked on implementing the interface and making the learning tracker smooth and enjoyable to use. Along the way, I explored gamification concepts, especially the Octalysis Framework, to understand how motivation could make the app more engaging.',
                'image' => 'blooma.png',
                'glide' => 'blooma-glide.png',
                'description' => 'A Learning Tracker app that enhances self-awareness and internal motivation in learners by integrating gamification elements, fostering a personalized and engaging learning journey.',
                'previews' => [],
            ],
            [
                'title' => 'RattUI',
                'subtitle' => 'Interactive app to learn and explore iOS components.',
                'jobDesc' => 'RattUI was my first experience stepping into a designer role, where I took on the challenge of handling an iOS project from a design perspective. I focused on creating intuitive layouts, experimenting with iOS design components, and working with the team to shape a smooth learning experience. This project helped me understand the design process more deeply and how design decisions directly affect usability and engagement.',
                'image' => 'rattui.png',
                'glide' => 'rattui-glide.png',
                'description' => 'RattUI is an interactive learning app aiming to help beginner designers and developers overcome challenges in understanding iOS design components The app provides hands-on simulations and practical exercises, helping users master essential design elements. By integrating gamification elements, RattUI also keeps users engaged and motivated, ensuring they can learn at their own pace.',
                'previews' => [],
            ],
            [
                'title' => 'PeePeace',
                'subtitle' => 'A lighthearted gyro-based game that turns explicit humor into a fun and silly challenge.',
                'jobDesc' => 'As a Coder, I implemented the core game mechanics of PeePeace, using the device’s gyroscope to create an interactive and hilarious gameplay experience. Our team’s unique twist was transforming explicit content into a funny and engaging game concept, which pushed me to experiment with physics, controls, and playful design elements.',
                'image' => 'peepeace.jpeg',
                'glide' => 'peepeace-glide.jpeg',
                'description' => 'PeePeace is designed to replicate the experience of a man taking a pee. The objective of this game is to direct the piss into the hole of the toilet accurately and avoid its splatter into unwanted areas.',
                'previews' => [],
            ],
            [
                'title' => 'BOXing',
                'subtitle' => 'An AR boxing game powered by ARKit, RealityKit, and Vision framework.',
                'jobDesc' => 'As a solo developer, I designed and built BOXing from the ground up. I implemented ARKit and RealityKit to create an immersive augmented reality environment, while integrating Apple\'s Vision framework for real-time hand position detection using the front camera. This project challenged me to combine AR interaction, camera-based tracking, and game mechanics into a seamless experience, showcasing my ability to handle both technical implementation and creative design independently.',
                'image' => 'BOXing.png',
                'glide' => 'boxing-glide.png',
                'description' => 'Developing an augmented reality (AR) game for iOS using ARKit, RealityKit, and the Vision framework, with a focus on utilizing the front camera for immersive user experiences. The game leverages hand position detection and AR technologies to create an engaging and interactive gameplay environment. Additionally, it references the project that i made called BOXing as a practical example. Augmented Reality (AR) has transformed the way users interact with digital content, providing immersive experiences by blending the virtual world with the real one. Apple\'s ARKit and RealityKit frameworks offer powerful tools for creating AR experiences on iOS devices. When combined with the Vision framework, which provides robust hand position detection capabilities, developers can create unique AR applications that use the front camera to enhance interactivity. This publication includes a case study of the BOXing project, an AR game utilizing these technologies.',
                'previews' => ['boxing1.PNG', 'boxing2.PNG', 'boxing3.PNG', 'boxing4.PNG'],
            ],
        ];

        return array_map(function (array $item) {
            $item['slug'] = Str::slug($item['title']);

            return $item;
        }, $items);
    }

    private function services(): array
    {
        return [
            [
                'title' => 'IOS Developer',
                'description' => 'Gained 10 months of hands-on experience as a Junior Developer at Apple Developer Academy @BINUS, specializing in building innovative iOS applications.',
                'icon' => 'swiftLogo.png',
            ],
            [
                'title' => 'Software Developer',
                'description' => 'Currently pursuing a Bachelor\'s degree in Computer Science at BINUS University Alam Sutera, focusing on mastering software engineering principles and practices.',
                'icon' => 'htmlLogo.png',
            ],
            [
                'title' => 'Mobile Programmer',
                'description' => 'Experienced in developing robust mobile applications using the Flutter framework and Dart language, ensuring high performance and cross-platform compatibility.',
                'icon' => 'flutterLogo.svg',
            ],
        ];
    }
}
