<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="solar installer, solar energy, solar panels">
    <meta name="author" content="Polaron Solar">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
    <meta name="google-site-verification" content="mzR_DEfurcxl16TbDPj75x3wy7bRm4wpx4FEoVoupFE" />
    <meta name="google-site-verification" content="google8ad7f8642c9b2852.html" />
    <meta name="google-site-verification" content="cEJ0k0nNPMObjyEO2PiW8FRLLsh2biJd5V6r4ZXrExE" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/jquery.validate.min.js' ?>"></script>
    <!-- <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap3.3.7.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/my-bootstrap-extension.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/commonStyle.css'; ?>">
    <!-- 字体 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto%20Serif%3A400%2C400i%2C700%2C700i%7COverpass%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&display=swap">
    <!--  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: ["class"],
            content: [],
            prefix: "",
            theme: {
                screens: {
                    window1: "1920px", // Add margin to the left and right
                    window2: "1200px", // PC UI, Font Design
                    tablet1: "980px", // Tablet => PC Font Design
                    tablet2: "767px", // Tablet UI, Font Design
                    mobile1: "490px", // Mobile => Tablet Font Design
                    mobile2: "320px", // Mobile UI, Font Design
                    xs: "320px",
                    // => @media (min-width: 320px) { ... }
                    sm: "630px",
                    // => @media (min-width: 640px) { ... }
                    md: "768px",
                    // => @media (min-width: 768px) { ... }
                    lg: "1024px",
                    // => @media (min-width: 1024px) { ... }
                    xl: "1280px",
                    // => @media (min-width: 1280px) { ... }
                    "2xl": "1536px",
                    // => @media (min-width: 1536px) { ... }
                    // FINAL STANDARD
                    mobile: "320px",
                    tablet: "481px",
                    desktop: "768px",
                },
                extend: {
                    aspectRatio: {
                        "16/14": "16 / 14",
                    },
                    colors: {
                        border: "hsl(var(--border))",
                        input: "hsl(var(--input))",
                        ring: "hsl(var(--ring))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))",
                        primary: {
                            DEFAULT: "hsl(var(--primary))",
                            foreground: "hsl(var(--primary-foreground))",
                        },
                        secondary: {
                            DEFAULT: "hsl(var(--secondary))",
                            foreground: "hsl(var(--secondary-foreground))",
                        },
                        destructive: {
                            DEFAULT: "hsl(var(--destructive))",
                            foreground: "hsl(var(--destructive-foreground))",
                        },
                        muted: {
                            DEFAULT: "hsl(var(--muted))",
                            foreground: "hsl(var(--muted-foreground))",
                        },
                        accent: {
                            DEFAULT: "hsl(var(--accent))",
                            foreground: "hsl(var(--accent-foreground))",
                        },
                        popover: {
                            DEFAULT: "hsl(var(--popover))",
                            foreground: "hsl(var(--popover-foreground))",
                        },
                        card: {
                            DEFAULT: "hsl(var(--card))",
                            foreground: "hsl(var(--card-foreground))",
                        },
                        "btn-green": "#60BF9C",
                        "light-green": "#5BC593",
                        "sky-blue": "#1D57DE",
                        "polaron-black": "#272848",
                        "polaron-sky-blue": "#1D58D7",
                        "polaron-blue": "#1853F6",
                        "incentive-title": "#272848",
                        "incentive-tag": "#687292",
                        "btn-default": "#214083",
                        "btn-hover": "#357ABD",
                        "btn-active": "#2C5C8A",
                        "success-green": "#15B097",
                        "neutral-25": "#F9F9FB",
                        "neutral-50": "#F9FAFB",
                        "neutral-100": "#F3F4F6",
                        "neutral-200": "#E5E7EB",
                        "neutral-300": "#D1D5DB",
                        "neutral-400": "#9CA3AF",
                        "neutral-500": "#6B7280",
                        "neutral-600": "#4B5563",
                        "neutral-700": "#374151",
                        "neutral-800": "#1F2937",
                        "neutral-900": "#111827",
                        "neutral-950": "#030712",
                    },
                    borderRadius: {
                        lg: "var(--radius)",
                        md: "calc(var(--radius) - 2px)",
                        sm: "calc(var(--radius) - 4px)",
                        '10': '10%',
                    },
                    keyframes: {
                        "accordion-down": {
                            from: {
                                height: "0"
                            },
                            to: {
                                height: "var(--radix-accordion-content-height)"
                            },
                        },
                        "accordion-up": {
                            from: {
                                height: "var(--radix-accordion-content-height)"
                            },
                            to: {
                                height: "0"
                            },
                        },
                        moveHorizontal: {
                            "0%": {
                                transform: "translateX(-50%) translateY(-10%)",
                            },
                            "50%": {
                                transform: "translateX(50%) translateY(10%)",
                            },
                            "100%": {
                                transform: "translateX(-50%) translateY(-10%)",
                            },
                        },
                        moveInCircle: {
                            "0%": {
                                transform: "rotate(0deg)",
                            },
                            "50%": {
                                transform: "rotate(180deg)",
                            },
                            "100%": {
                                transform: "rotate(360deg)",
                            },
                        },
                        moveVertical: {
                            "0%": {
                                transform: "translateY(-50%)",
                            },
                            "50%": {
                                transform: "translateY(50%)",
                            },
                            "100%": {
                                transform: "translateY(-50%)",
                            },
                        },
                    },
                    animation: {
                        "accordion-down": "accordion-down 0.2s ease-out",
                        "accordion-up": "accordion-up 0.2s ease-out",
                        first: "moveVertical 30s ease infinite",
                        second: "moveInCircle 20s reverse infinite",
                        third: "moveInCircle 40s linear infinite",
                        fourth: "moveHorizontal 40s ease infinite",
                        fifth: "moveInCircle 20s ease infinite",
                    },
                    boxShadow: {
                        "3xl": "0 0 100px -15px rgba(0, 0, 0, 0.3)",
                    },
                    margin: {
                        window1: "64px",
                        window2: "64px",
                        tablet: "32px",
                        mobile: "16px",
                    },
                    padding: {
                        window1: "128px",
                        window2: "64px",
                        tablet: "32px",
                        mobile: "16px",
                    },
                    backgroundImage: {},
                },
                fontSize: {
                    "h1-desktop-lg": ["48px", {
                        lineHeight: "1.2"
                    }],
                    "h2-desktop-lg": ["32px", {
                        lineHeight: "1.2"
                    }],
                    "h3-desktop-lg": ["24px", {
                        lineHeight: "1.2"
                    }],
                    "h4-desktop-lg": ["20px", {
                        lineHeight: "1.2"
                    }],
                    "h5-desktop-lg": ["16px", {
                        lineHeight: "1.2"
                    }],
                    "p-lg-desktop-lg": ["18px", {
                        lineHeight: "1.5"
                    }],
                    "p-desktop-lg": ["16px", {
                        lineHeight: "1.5"
                    }],
                    "p-small-desktop-lg": ["14px", {
                        lineHeight: "1.5"
                    }],
                    "p-xsmall-desktop-lg": ["12px", {
                        lineHeight: "1.5"
                    }],
                    "h1-desktop": ["32px", {
                        lineHeight: "1.2"
                    }],
                    "h2-desktop": ["24px", {
                        lineHeight: "1.2"
                    }],
                    "h3-desktop": ["20px", {
                        lineHeight: "1.2"
                    }],
                    "h4-desktop": ["16px", {
                        lineHeight: "1.2"
                    }],
                    "h5-desktop": ["14px", {
                        lineHeight: "1.2"
                    }],
                    "p-lg-desktop": ["18px", {
                        lineHeight: "1.5"
                    }],
                    "p-desktop": ["16px", {
                        lineHeight: "1.5"
                    }],
                    "p-small-desktop": ["14px", {
                        lineHeight: "1.5"
                    }],
                    "p-xsmall-desktop": ["12px", {
                        lineHeight: "1.5"
                    }],
                    "h1-tablet": ["32px", {
                        lineHeight: "1.2"
                    }],
                    "h2-tablet": ["22px", {
                        lineHeight: "1.2"
                    }],
                    "h3-tablet": ["18px", {
                        lineHeight: "1.2"
                    }],
                    "h4-tablet": ["16px", {
                        lineHeight: "1.2"
                    }],
                    "h5-tablet": ["14px", {
                        lineHeight: "1.2"
                    }],
                    "p-lg-tablet": ["18px", {
                        lineHeight: "1.5"
                    }],
                    "p-tablet": ["16px", {
                        lineHeight: "1.5"
                    }],
                    "p-small-tablet": ["14px", {
                        lineHeight: "1.5"
                    }],
                    "p-xsmall-tablet": ["12px", {
                        lineHeight: "1.5"
                    }],
                    "h1-mobile": ["28px", {
                        lineHeight: "1.2"
                    }],
                    "h2-mobile": ["22px", {
                        lineHeight: "1.2"
                    }],
                    "h3-mobile": ["18px", {
                        lineHeight: "1.2"
                    }],
                    "h4-mobile": ["16px", {
                        lineHeight: "1.2"
                    }],
                    "h5-mobile": ["14px", {
                        lineHeight: "1.2"
                    }],
                    "p-lg-mobile": ["18px", {
                        lineHeight: "1.5"
                    }],
                    "p-mobile": ["16px", {
                        lineHeight: "1.5"
                    }],
                    "p-small-mobile": ["14px", {
                        lineHeight: "1.5"
                    }],
                    "p-xsmall-mobile": ["12px", {
                        lineHeight: "1.5"
                    }],
                    'xxs': ['10px', {
                        lineHeight: '1.2'
                    }],
                    'xs': ['12px', {
                        lineHeight: '1.4'
                    }],
                    'sm': ['14px', {
                        lineHeight: '1.5'
                    }],
                    'base': ['16px', {
                        lineHeight: '1.6'
                    }],
                    'lg': ['18px', {
                        lineHeight: '1.7'
                    }],
                    'xl': ['20px', {
                        lineHeight: '1.8'
                    }],
                },
                fontFamily: {
                    overpassbold: ["Overpass-bold", "sans-serif"],
                    overpassblack: ["Overpass-black", "sans-serif"],
                    overpassextrabold: ["Overpass-extrabold", "sans-serif"],
                    overpasssemibold: ["Overpass-semibold", "sans-serif"],
                    overpassregular: ["Overpass-regular", "sans-serif"],
                    overpasslight: ["Overpass-light", "sans-serif"],
                    overpassmedium: ["Overpass-medium", "sans-serif"],
                    heading: ["Overpass", "sans-serif"],
                    body: ["Inter", "sans-serif"],
                },
                fontWeight: {
                    bold: "700",
                    "semi-bold": "600",
                    medium: "500",
                    normal: "400",
                    light: "350",
                },
            },
            plugins: [
                function({
                    addBase
                }) {
                    addBase({
                        ':root': {
                            '--radius': '0.5rem',
                        },
                    });
                },
            ],
            variants: {
                extend: {
                    backgroundColor: ["hover", "active"],
                },
            },
        };
    </script>
    <style>
        .glass-button {
            background-image: linear-gradient(0deg,
                    rgba(255, 255, 255, 0.15),
                    rgba(255, 255, 255, 0.15));
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 24px;
            font-size: 1rem;
            color: white;
            border-radius: 100px;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .glass-button:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: linear-gradient(0deg,
                    rgba(255, 255, 255, 0.45),
                    rgba(255, 255, 255, 0.15));
            opacity: 0;
            transition: all 0.5s ease-in-out;
            border-radius: 100px;
            z-index: -1;
        }

        .glass-button:hover:after {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .glass-button {
                padding: 5px 15px;
            }
        }

        #navbar-box img {
            margin: 0;
        }

        html {
            font-size: 16px;
        }

        /* 动画效果 */
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="padding: 0px;margin:0px;">
    <!-- 绿色小弹窗的 -->
    <style>
        .greenwindow {
            position: fixed;
            right: 10;
            bottom: 10px;
            background-color: #61C3A3;
            height: 150px;
            width: 250px;
            z-index: 10000;
            border-radius: 10px;
            font-family: 'Overpass';
        }

        .greenwindow p {
            width: 80%;
            margin-left: 10%;
            margin-top: 5%;
            font-size: 18px;
            line-height: 1.3em;
            text-align: left;
            color: white;
        }

        .greenwindow span {
            display: block;
            margin-top: 5%;
            margin-left: 10%;
            font-size: 16px;
            color: white;
            font-style: oblique;
        }
    </style>
    <!-- 绿色小弹窗部分 -->
    <div class="greenwindow">
        <p id="greenwindowP">Lauri in Bridgewater just requested a free solar estimate.
        </p>
        <span id="greenwindowSpan">2 mins ago</span>
    </div>
    <script>
        //这里是小弹窗的js绿色弹窗的js
        //指定每个名字
        cusnames = new Array("Chris", "Maureen", "Andrew", "Kathleen", "Amer", "Janice", "Kathryn", "Laura",
            "Kris", "Steven", "Veronica", "Brett", "Neil", "Russell", "James", "Marissa", "Marco", "Darrell", "Brian", "Shawn", "Nancy", "Darrin",
            "Paulette", "Vincent", "Dana", "Sharon", "Matthew", "Donna", "Savannah", "Ben", "Deanna", "Lindsay", "Donna", "Caleb", "Carolyn", "Lyndsay",
            "Ken", "Victor", "Brian", "Dion", "Debbie", "Rob", "Barry", "Frederick", "Robbie", "Steve", "Stephanie", "Yahia", "Kelly", "Dave", "Saurabh", "Walter");
        //指定每个地址
        address = new Array("Dartmouth", "Blockhouse", "Havre Boucher", "Southside Harbour", "Church Point", "Halifax", "Hubbards", "Lantz",
            "Truro", "Nine Mile River", "Duncans Cove", "Timberlea", "Cole Harbour", "Sambro Head", "Greenwood", "Lunenburg", "Hubley", "Lawrencetown",
            "Centreville", "Aylesford", "Port Medway", "Mermaid", "Charlottetown", "Kingston", "Summerside", "Cornwall", "Murray River", "Alexandra",
            "Miscouche", "Donagh", "Cornwall", "Summerside", "Wellington", "Hunter River", "Charlottetown", "New Glasgow", "Barrie", "Niagara Falls", "Markham",
            "Newmarket", "Peterborough", "Pefferlaw", "Waterloo", "Windsor", "Scarborough", "Coquitlam", "Woodville", "Burnaby", "Langley", "Delta", "North Vancouver", "Vancouver");
        var int = self.setInterval("blueBox(cusnames,address)", 6000);

        function blueBox(cusnames, address) {
            index = Math.floor(Math.random() * cusnames.length);
            // window.document.title += " - "+tips[index];
            var doc = document.getElementById("greenwindowP").innerHTML = cusnames[index] + " in " + address[index] + " just requested a free solar estimate.";
            // 生成一到十个的随机数，用它来判断奇偶
            var number = Math.floor((Math.random() * 10) + 1);
            // 生成随机数用来表示分钟
            var times = Math.round(Math.random() * 50 + 1);
            // 生成一到8的随机数用来表示小时
            var numberH = Math.floor((Math.random() * 8) + 1);
            // console.log(index);
            if (number % 2 == 0) {
                var docSpan = document.getElementById("greenwindowSpan").innerHTML = times + " Minutes ago.";
            } else {
                var docSpan = document.getElementById("greenwindowSpan").innerHTML = numberH + " hours ago.";
            }
        }
        setTimeout(function() {
            window.clearInterval(int);
            var pbox = document.getElementsByClassName('greenwindow');
            pbox[0].style.display = "none";
        }, 120000, int);
    </script>
    <nav style="z-index: 1000;min-height: 0px;" id="navbar-box" class="navbar font-normal text-[18px] text-sm fixed w-full z-100 top-0 transition duration-300 ease-in-out bg-transparent">
        <!-- 电脑版本菜单 -->
        <div id="navbarLg" class="hidden window2:block w-full h-[74px] mx-auto px-2 window2:px-6 lg:px-8 relative flex items-center justify-between">
            <div class="w-full h-full relative flex items-center justify-start items-stretch">
                <div class="absolute h-full left-0 flex items-center">
                    <a class="flex justify-center items-center h-full font-bold text-xl text-white hover:text-gray-700" href="https://polaronsolar.com">
                        <img id="logo-website" class="h-8 w-auto" src="<?php echo get_template_directory_uri() . '/header/img/logo-default.cdfff8af.avif'; ?>" alt="polaron-logo" />
                    </a>
                </div>
                <div class="w-full h-full hidden window2:block window2:ml-6">
                    <div class="flex h-full w-full justify-center items-center h-12 space-x-4">
                        <a id="res-parent-menu" class="flex justify-center items-center group transition duration-300 px-2 relative rounded-md text-sm h-full font-normal" href="https://polaronsolar.com/residential">
                            <p class="a-p-p-link text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-white hover:text-sky-600">
                                Residential
                            </p>
                            <img src="<?php echo get_template_directory_uri() . '/header/img/arrow.c58a946c.svg'; ?>" class="arrow-menu hidden w-[20px] h-[20px]" alt="v" />
                            <span class="absolute left-0 bottom-0 w-full bg-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                        </a>
                        <a id="com-parent-menu" class="flex justify-center items-center group transition duration-300 px-2 relative rounded-md text-sm h-full font-normal" href="https://polaronsolar.com/commercial">
                            <p class="a-p-p-link text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-white hover:text-sky-600">
                                Commercial
                            </p>
                            <img src="<?php echo get_template_directory_uri() . '/header/img/arrow.c58a946c.svg'; ?>" class="arrow-menu hidden w-[20px] h-[20px]" alt="v" />
                            <span class="absolute left-0 bottom-0 w-full bg-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                        </a>
                        <a id="about-parent-menu" class="flex justify-center items-center group transition duration-300 px-2 relative rounded-md text-sm h-full font-normal" href="https://polaronsolar.com/about">
                            <p class="a-p-p-link text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-white hover:text-sky-600">
                                About
                            </p>
                            <img src="<?php echo get_template_directory_uri() . '/header/img/arrow.c58a946c.svg'; ?>" class="arrow-menu hidden w-[20px] h-[20px]" alt="v" />
                            <span class="absolute left-0 bottom-0 w-full bg-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                        </a>
                        <a id="news-parent-menu" class="flex justify-center items-center group transition duration-300 px-2 relative rounded-md text-sm h-full font-normal" href="https://polaronsolar.com/news">
                            <p class="a-p-p-link text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-white hover:text-sky-600">
                                News
                            </p>
                            <span class="absolute left-0 bottom-0 w-full bg-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                        </a>
                        <a id="pm-parent-menu" class="flex justify-center items-center group transition duration-300 px-2 relative rounded-md text-sm h-full font-normal" href="https://polaronsolar.com/pointsMall">
                            <p class="a-p-p-link text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-white hover:text-sky-600">
                                Points Mall
                            </p>
                            <span class="absolute left-0 bottom-0 w-full bg-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                        </a>
                    </div>
                </div>
                <div class="absolute right-0 flex h-full items-center">
                    <a href="https://polaronsolar.com/customer-portal">
                        <div id="btn-cp" class="rounded-3xl px-6 py-2 bg-white/20 backdrop-blur-lg text-white">
                            Customer Portal
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- 子菜单residential -->
        <div id="res-son-menu" class="hidden border-t-2 w-full justify-center items-center h-12 bg-white">
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/residential/solar-solutions">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Solar Solutions
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/residential/battery-solutions">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Battery Solutions
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/residential/hvac">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        HVAC
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full group">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="/residential/alberta">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">Provinces</p>
                    <img src="<?php echo get_template_directory_uri() . '/header/img/arrow.c58a946c.svg'; ?>" class="w-[20px] h-[20px] ml-1" alt="v">
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
                <div class="absolute top-full left-0 bg-white border border-gray-200 rounded-md shadow-lg py-2 min-w-[200px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/residential/alberta">Alberta</a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/residential/british-columbia">British Columbia</a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/residential/nova-scotia">Nova Scotia</a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/residential/prince-edward-island">PEI</a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/residential/ontario">Ontario</a>
                </div>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/residential/faq/">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        FAQs
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
        </div>
        <!-- commercial子菜单 -->
        <div id="com-son-menu" class="hidden border-t-2 w-full justify-center items-center h-12 bg-white">
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/commercial/solar-solution">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Solar Solutions
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/commercial/battery-solution">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Battery Solutions
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/commercial/incentives">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Incentives
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/commercial/faq">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        FAQs
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
        </div>
        <!-- about子菜单 -->
        <div id="about-son-menu" class="hidden border-t-2 w-full justify-center items-center h-12 bg-white">
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/about">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        About Polaron
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/download-warranty-package">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        About Warranty
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/referral-program">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Referral Program
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/polaron-academy">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Polaron Academy
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/customer-testimonial">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Testimonial
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
            <div class="relative h-full">
                <a class="flex justify-center items-center group transition duration-300 relative px-4 h-full rounded-md text-sm font-normal" href="https://polaronsolar.com/case-study">
                    <p class="text-p-small-mobile font-body font-normal text-black md:text-p-small-tablet md:font-normal lg:text-p-small-desktop lg:font-normal xl:text-p-small-desktop-lg xl:font-normal text-gray-700 hover:text-sky-600">
                        Case Study
                    </p>
                    <span class="absolute left-0 bottom-0 w-full bg-left-bottom block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600"></span>
                </a>
            </div>
        </div>
        <!-- 手机版本菜单 -->
        <div id="navbarSm" class="window2:hidden flex flex-col bg-transparent">
            <!-- 点开以后mobile-menu要隐藏掉  mx-4-->
            <div class="h-16 window2:block max-w-7xl px-2 window2:px-6 lg:px-8 relative flex items-center justify-between text-white m-auto" id="mobile-menu">
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <button id="sm-icon-btn" class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-start items-stretch">
                    <div class="flex-shrink-0">
                        <a class="flex justify-center items-center h-full font-bold text-xl text-white hover:text-gray-700" href="https://polaronsolar.com">
                            <img id="sm-logo-website" class="h-8" src="<?php echo get_template_directory_uri() . '/header/img/logo-default.cdfff8af.avif'; ?>" alt="polaron-logo" />
                        </a>
                    </div>
                </div>
            </div>
            <!--点开之前的 fixed inset-0 bg-black transition-opacity duration-300 opacity-0 pointer-events-none -->
            <!-- fixed inset-0 bg-black transition-opacity duration-300 opacity-40 -->
            <div id="sm-shade-menu" class="fixed inset-0 bg-black transition-opacity duration-300 opacity-0 pointer-events-none"></div>
            <!-- sm子菜单打开第一层 -->
            <!-- 点开前是translate-x-full点开后是translate-x-0 -->
            <div id="block-one-left" class="fixed top-0 right-0 h-full w-[70%] transition-all overflow-hidden duration-300 z-50 translate-x-full">
                <div class="absolute inset-0 bg-white" style="transition: background-color 1s"></div>
                <!-- 父级菜单 -->
                <div class="flex flex-col w-full h-full relative pt-16">
                    <button id="left-btn-menu" class="hidden absolute top-4 left-0 p-2">
                        <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-black.a519ac25.svg'; ?>" class="rotate-90 w-[30px] h-[30px] text-white" alt="previous" />
                    </button>
                    <button id="x-btn-menu" class="absolute top-4 right-4 p-2">
                        <img src="<?php echo get_template_directory_uri() . '/header/img/x-black.e676836a.svg'; ?>" class="w-[15px] h-[15px]" alt="close" />
                    </button>
                    <!-- 父级所有的菜单 -->
                    <div id="sm-main-p-menu" class="flex flex-col w-full translate-x-full opacity-0 transition-all duration-500 ease-in-out" style="">
                        <div id="sm-res-p-box">
                            <div class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Residential
                                </p>
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-black.a519ac25.svg'; ?>" class="w-[20px] h-[20px] group-hover:opacity-0 text-white -rotate-90" alt="" />
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-white-blue.33d94c0b.svg'; ?>" class="w-[20px] h-[20px] hidden group-hover:block opacity-0 group-hover:opacity-100 text-white -rotate-90" alt="" />
                            </div>
                        </div>
                        <div id="sm-com-p-box">
                            <div class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Commercial
                                </p>
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-black.a519ac25.svg'; ?>" class="w-[20px] h-[20px] group-hover:opacity-0 text-white -rotate-90" alt="" />
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-white-blue.33d94c0b.svg'; ?>" class="w-[20px] h-[20px] hidden group-hover:block opacity-0 group-hover:opacity-100 text-white -rotate-90" alt="" />
                            </div>
                        </div>
                        <div id="sm-about-p-box">
                            <div class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    About
                                </p>
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-black.a519ac25.svg'; ?>" class="w-[20px] h-[20px] group-hover:opacity-0 text-white -rotate-90" alt="" />
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-white-blue.33d94c0b.svg'; ?>" class="w-[20px] h-[20px] hidden group-hover:block opacity-0 group-hover:opacity-100 text-white -rotate-90" alt="" />
                            </div>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/news">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    News
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/pointsMall">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Points Mall
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/customer-portal">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Customer Portal
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- 手机版本res的子菜单 -->
                    <div id="sm-res-son-box" class="flex flex-col w-full translate-x-full opacity-0 transition-all duration-500 ease-in-out" style="">
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/residential">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Residential
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/residential/solar-solutions">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Solar Solutions
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/residential/battery-solutions">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Battery Solution
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/residential/hvac">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    HVAC
                                </p>
                            </a>
                        </div>
                        <div class="province-container">
                            <div class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" data-expanded="false" onclick="toggleProvinceContent(this)">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Provinces
                                </p>
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-black.a519ac25.svg'; ?>" class="icon-arrow w-[20px] h-[20px] text-gray-700 transition-transform duration-300 group-hover:opacity-0" alt="Black Arrow">
                                <img src="<?php echo get_template_directory_uri() . '/header/img/arrow-white-blue.33d94c0b.svg'; ?>" class="icon-arrow-hover w-[20px] h-[20px] text-gray-700 hidden group-hover:block transition-transform duration-300" alt="Blue Arrow">
                            </div>
                            <div class="province-content overflow-hidden bg-gray-50 max-h-0 opacity-0 transition-all duration-500">
                                <a class="block pl-8 pr-4 py-3 text-gray-700 hover:text-sky-600" href="https://polaronsolar.com/alberta">Alberta</a>
                                <a class="block pl-8 pr-4 py-3 text-gray-700 hover:text-sky-600" href="https://polaronsolar.com/british-columbia/">British Columbia</a>
                                <a class="block pl-8 pr-4 py-3 text-gray-700 hover:text-sky-600" href="https://polaronsolar.com/nova-scotia/">Nova Scotia</a>
                                <a class="block pl-8 pr-4 py-3 text-gray-700 hover:text-sky-600" href="https://polaronsolar.com/prince-edward-island/">PEI</a>
                                <a class="block pl-8 pr-4 py-3 text-gray-700 hover:text-sky-600" href="https://polaronsolar.com/ontario/">Ontario</a>
                            </div>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/residential/faq">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    FAQs        
                                </p>
                            </a>
                        </div>


                    </div>
                    <!--手机版本com的子菜单  -->
                    <div id="sm-com-son-box" class="flex flex-col w-full translate-x-full opacity-0 transition-all duration-500 ease-in-out" style="">
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/commercial">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Commercial
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/commercial/solar-solution">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Solar Solution
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/commercial/battery-solution">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Battery Solution
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/commercial/incentives">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Incentives
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/commercial/faq">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    FAQs
                                </p>
                            </a>
                        </div>
                    </div>
                    <!--手机版本about的子菜单  -->
                    <div id="sm-about-son-box" class="flex flex-col w-full translate-x-full opacity-0 transition-all duration-500 ease-in-out" style="">
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/about">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    About
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/about">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    About Polaron
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/download-warranty-package">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    About Warranty
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/referral-program">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Referral Program
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/polaron-academy">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Polaron Academy
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/customer-testimonial">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Testimonial
                                </p>
                            </a>
                        </div>
                        <div>
                            <a class="px-8 h-16 flex items-center justify-between group transition duration-300 px-2 rounded-md text-sm w-full py-2 font-normal cursor-pointer hover:text-sky-600" href="https://polaronsolar.com/case-study">
                                <p class="text-p-mobile font-body font-normal text-black md:text-p-tablet md:font-normal lg:text-p-desktop lg:font-normal xl:text-p-desktop-lg xl:font-normal text-gray-700 group-hover:text-sky-600">
                                    Case Study
                                </p>
                            </a>
                        </div>
                    </div>
                    <div style="display: none;" class="w-full flex items-center justify-center mt-auto mb-8">
                        <a href="https://polaronsolar.com/customer-portal" class="flex">
                            <div class="glass-button">Customer Portal</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="content" class="site-content">
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                //设置初始状态
                let openMenu = false; // 菜单是否打开
                let isHovered = false; // 菜单是否打开
                let childTags = []; //子标签（菜单动态生成的内容）
                let scroll = false; // 用户是否滚动页面
                let timer = null; // 用户是否滚动页面
                let hide = true;
                const showNavbar = !hide || isHovered || scroll;
                // 获取dom节点
                const navbar = document.getElementById("navbar-box");
                const navbarLg = document.getElementById("navbarLg");
                const navbarSm = document.getElementById("navbarSm");
                const logoWebsite = document.getElementById("logo-website");
                const smLogoWebsite = document.getElementById("sm-logo-website");
                const aPPLinks = document.querySelectorAll(".a-p-p-link");
                const btnCP = document.getElementById("btn-cp");
                const smIconBtn = document.getElementById("sm-icon-btn");
                // 父级菜单
                const resParentMenuBtn = document.getElementById("res-parent-menu");
                const comParentMenuBtn = document.getElementById("com-parent-menu");
                const aboutParentMenuBtn = document.getElementById("about-parent-menu");
                const newsParentMenuBtn = document.getElementById("news-parent-menu");
                const pmParentMenuBtn = document.getElementById("pm-parent-menu");
                //父菜单icon显示
                const arrowMenus = document.querySelectorAll(".arrow-menu");

                // 子集菜单
                const resSonMenuBtn = document.getElementById("res-son-menu");
                const comSonMenuBtn = document.getElementById("com-son-menu");
                const aboutSonMenuBtn = document.getElementById("about-son-menu");
                // 记录当前激活的子菜单
                let currentActiveSonMenu = null;
                // 切换子菜单的激活状态
                function switchActiveMenu(newActiveMenu) {
                    // 如果有激活的子菜单，移除其类
                    if (currentActiveSonMenu) {
                        currentActiveSonMenu.classList.remove("window2:flex");
                    }
                    // 更新当前激活的子菜单并添加类
                    currentActiveSonMenu = newActiveMenu;
                    if (currentActiveSonMenu) {
                        currentActiveSonMenu.classList.add("window2:flex");
                    }
                }
                // 为每个父级菜单设置鼠标进入事件监听
                resParentMenuBtn.addEventListener("mouseenter", () => {
                    switchActiveMenu(resSonMenuBtn); // 激活资源子菜单
                });

                comParentMenuBtn.addEventListener("mouseenter", () => {
                    switchActiveMenu(comSonMenuBtn);
                });

                aboutParentMenuBtn.addEventListener("mouseenter", () => {
                    switchActiveMenu(aboutSonMenuBtn);
                });
                // 为没有子菜单的父级菜单设置鼠标进入事件监听
                newsParentMenuBtn.addEventListener("mouseenter", () => {
                    switchActiveMenu(null); // 清除激活状态
                });
                pmParentMenuBtn.addEventListener("mouseenter", () => {
                    switchActiveMenu(null); // 清除激活状态
                });
                //获取手机版本dom节点
                const mobileMenuBox = document.getElementById("mobile-menu");
                const blockOneLeft = document.getElementById("block-one-left");
                const xBtnMenu = document.getElementById("x-btn-menu");
                const smShadeMenu = document.getElementById("sm-shade-menu");

                const smResPBox = document.getElementById("sm-res-p-box");
                const smComPBox = document.getElementById("sm-com-p-box");
                const smAboutPBox = document.getElementById("sm-about-p-box");
                const smResSonBox = document.getElementById("sm-res-son-box");
                const smComSonBox = document.getElementById("sm-com-son-box");
                const smAboutSonBox = document.getElementById("sm-about-son-box");
                const smMainPMenu = document.getElementById("sm-main-p-menu");
                const leftBtnMenu = document.getElementById("left-btn-menu");

                // 添加手机版本第一个展开按钮点击事件
                smIconBtn.addEventListener("click", () => {
                    mobileMenuBox.classList.add("hidden");
                    blockOneLeft.classList.remove("translate-x-full");
                    blockOneLeft.classList.add("translate-x-0");
                    smShadeMenu.style.opacity = "0.4";
                    document.body.style.overflow = "hidden";
                    //显示主菜单动画
                    smMainPMenu.classList.remove("translate-x-[-100%]", "opacity-0");
                    smMainPMenu.classList.add("translate-x-0", "opacity-100");
                });
                xBtnMenu.addEventListener("click", () => {
                    mobileMenuBox.classList.remove("hidden");
                    blockOneLeft.classList.add("translate-x-full");
                    blockOneLeft.classList.remove("translate-x-0");
                    smShadeMenu.style.opacity = "0";
                    document.body.style.overflow = "auto";
                });
                // 添加sm main menu 点击事件
                smResPBox.addEventListener("click", () => {
                    // 检查当前状态，切换动画类
                    // smMainPMenu.classList.add("hidden");
                    //隐藏主菜单动画
                    smMainPMenu.classList.remove("translate-x-0", "opacity-100");
                    smMainPMenu.classList.add("translate-x-[-100%]", "opacity-0");
                    smMainPMenu.style.display = "none";
                    smResSonBox.classList.remove("hidden");
                    setTimeout(() => {
                        if (smResSonBox.classList.contains("translate-x-full")) {
                            // 显示：从左到右动画
                            smResSonBox.classList.remove("translate-x-full", "opacity-0");
                            smResSonBox.classList.add("translate-x-0", "opacity-100");
                        } else {
                            // 隐藏：从右到左动画
                            smResSonBox.classList.remove("translate-x-0", "opacity-100");
                            smResSonBox.classList.add("translate-x-full", "opacity-0");
                        }
                    }, 500);
                    leftBtnMenu.classList.remove("hidden");
                });
                smComPBox.addEventListener("click", () => {
                    smMainPMenu.classList.remove("translate-x-0", "opacity-100");
                    smMainPMenu.classList.add("translate-x-[-100%]", "opacity-0");
                    smMainPMenu.style.display = "none";
                    smResSonBox.classList.add("hidden");
                    smComSonBox.classList.remove("hidden");
                    setTimeout(() => {
                        if (smComSonBox.classList.contains("translate-x-full")) {
                            // 显示：从左到右动画
                            smComSonBox.classList.remove("translate-x-full", "opacity-0");
                            smComSonBox.classList.add("translate-x-0", "opacity-100");
                        }
                    }, 500);
                    // smComSonBox.classList.remove("hidden");
                    leftBtnMenu.classList.remove("hidden");
                });
                smAboutPBox.addEventListener("click", () => {
                    smMainPMenu.classList.remove("translate-x-0", "opacity-100");
                    smMainPMenu.classList.add("translate-x-[-100%]", "opacity-0");
                    smMainPMenu.style.display = "none";
                    smResSonBox.classList.add("hidden");
                    smComSonBox.classList.add("hidden");
                    smAboutSonBox.classList.remove("hidden");
                    setTimeout(() => {
                        if (smAboutSonBox.classList.contains("translate-x-full")) {
                            // 显示：从左到右动画
                            smAboutSonBox.classList.remove("translate-x-full", "opacity-0");
                            smAboutSonBox.classList.add("translate-x-0", "opacity-100");
                        }
                    }, 500);
                    leftBtnMenu.classList.remove("hidden");
                });
                leftBtnMenu.addEventListener("click", () => {
                    smMainPMenu.style.display = "block";
                    //显示主菜单动画
                    setTimeout(() => {
                        smMainPMenu.classList.remove("translate-x-[-100%]", "opacity-0");
                        smMainPMenu.classList.add("translate-x-0", "opacity-100");
                    }, 500); //

                    leftBtnMenu.classList.add("hidden");

                    // 初始化
                    smResSonBox.classList.add("hidden");
                    smResSonBox.classList.remove("translate-x-0", "opacity-100");
                    smResSonBox.classList.add("translate-x-full", "opacity-0");
                    smComSonBox.classList.add("hidden");
                    smComSonBox.classList.remove("translate-x-0", "opacity-100");
                    smComSonBox.classList.add("translate-x-full", "opacity-0");
                    smAboutSonBox.classList.add("hidden");
                    smAboutSonBox.classList.remove("translate-x-0", "opacity-100");
                    smAboutSonBox.classList.add("translate-x-full", "opacity-0");


                    smAboutSonBox.classList.add("hidden");
                });

                //鼠标移入更新lg菜单内容
                const handleHover = (c) => {
                    debugger;
                    timer = setTimeout(() => {
                        childTags = c; // 模拟异步更新子标签内容
                    }, 175); // 延迟175毫秒后更新
                };
                //鼠标移出更新lg菜单内容
                const handleMouseLeave = () => {
                    clearTimeout(timer);
                    childTags = [];
                };
                // 更新lg菜单内容
                const updateNavbarLg = () => {
                    navbarSm.style.display = "none";
                    navbarLg.style.display = "block";
                };
                //更新sm菜单内容
                const updateNavbarSm = () => {
                    navbarSm.style.display = "block";
                    navbarLg.style.display = "none";
                };

                // 导航栏样式更新
                const updateNavbarStyle = () => {
                    navbar.className = `navbar font-normal text-[18px] text-sm fixed w-full z-100 top-0 transition duration-300 ease-in-out ${
            isHovered || scroll ? "bg-white" : "bg-transparent"
          }`;
                };
                // 网站logo跟新lg
                const updateLogoWebsite = () => {
                    logoWebsite.src = `${
            isHovered || scroll
              ? "<?php echo get_template_directory_uri() . '/header/img/header-color.00776d88.avif'; ?>"
              : "<?php echo get_template_directory_uri() . '/header/img/logo-default.cdfff8af.avif'; ?>"
          }`;
                };
                // 网站logo跟新sm
                const updateSmLogoWebsite = () => {
                    smLogoWebsite.src = `${
            isHovered || scroll
              ? "<?php echo get_template_directory_uri() . '/header/img/header-color.00776d88.avif'; ?>"
              : "<?php echo get_template_directory_uri() . '/header/img/logo-default.cdfff8af.avif'; ?>"
          }`;
                };
                // 父级菜单文字颜色跟新,以及小icon显示
                const updateLinkPColor = () => {
                    aPPLinks.forEach((link) => {
                        if (isHovered || window.scrollY > 0) {
                            link.classList.add("text-gray-700");
                            link.classList.remove("text-white");
                            arrowMenus.forEach((arrowMenu) => {
                                arrowMenu.classList.remove("hidden");
                            });
                        } else {
                            link.classList.remove("text-gray-700");
                            link.classList.add("text-white");
                            arrowMenus.forEach((arrowMenu) => {
                                arrowMenu.classList.add("hidden");
                            });
                        }
                    });
                };
                //修改按钮背景颜色
                const updateBtnCP = () => {
                    if (isHovered || scroll) {
                        btnCP.classList.remove("bg-white/20");
                        btnCP.classList.add("bg-black");
                    } else {
                        btnCP.classList.remove("bg-black");
                        btnCP.classList.add("bg-white/20");
                    }
                };
                //修改小菜单sm icon
                const updateSmIconBtn = () => {
                    if (window.scrollY > 0 || isHovered) {
                        smIconBtn.classList.add("text-gray-700");
                        smIconBtn.classList.remove("text-white");
                    } else {
                        smIconBtn.classList.add("text-white");
                        smIconBtn.classList.remove("text-gray-700");
                    }
                };

                // 滚动监听
                const handleScroll = () => {
                    scroll = window.scrollY > 0;
                    updateNavbarStyle();
                    updateLogoWebsite();
                    updateSmLogoWebsite();
                    updateLinkPColor();
                    updateBtnCP();
                    updateSmIconBtn();
                };
                // 窗口大小变化
                const handleResize = () => {
                    if (window.innerWidth > 1200) {
                        updateNavbarLg(); // 如果宽度超过 1200px,显示大屏菜单
                        updateLogoWebsite(); // 更新大屏幕logo
                    } else {
                        updateNavbarSm(); // 显示小屏导航内容
                        updateSmLogoWebsite(); //更新小屏幕logo
                    }
                };
                // 事件绑定
                //鼠标移入移出导航栏事件
                navbar.addEventListener("mouseenter", () => {
                    isHovered = true;
                    updateNavbarStyle();
                    updateLogoWebsite();
                    updateSmLogoWebsite();
                    updateSmIconBtn();
                    updateLinkPColor();
                    updateBtnCP();
                });

                navbar.addEventListener("mouseleave", () => {
                    isHovered = false;
                    childTags = [];
                    handleMouseLeave();
                    updateNavbarStyle();
                    updateLogoWebsite();
                    updateSmLogoWebsite();
                    updateSmIconBtn();
                    updateLinkPColor();
                    updateBtnCP();
                    switchActiveMenu(null); // 清除lg子菜单激活状态
                });
                // 滚动事件和窗口变化事件
                window.addEventListener("scroll", handleScroll);
                window.addEventListener("resize", handleResize);

                // Initialize 初始化
                handleResize(); //获取窗口大小

                // const animatedDiv = document.getElementById("animated-div");

                // 模拟一个延时加载效果
                setTimeout(() => {
                    animatedDiv.classList.remove("-translate-x-full");
                    animatedDiv.classList.add("translate-x-0");
                }, 500); //
            });
        </script>
        <script>
            function toggleProvinceContent(element) {
                const container = element.closest('.province-container');
                const content = container.querySelector('.province-content');
                const iconArrow = container.querySelector('.icon-arrow');
                const iconHover = container.querySelector('.icon-arrow-hover');

                // 检查当前是否是展开状态
                const isExpanded = element.getAttribute('data-expanded') === 'true';
                element.setAttribute('data-expanded', !isExpanded);

                if (isExpanded) {
                    // 折叠内容
                    content.style.maxHeight = '0';
                    content.style.opacity = '0';
                    iconArrow.style.transform = 'rotate(0deg)';
                    iconHover.style.transform = 'rotate(0deg)';
                    container.classList.remove('expanded');
                } else {
                    // 展开内容
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                    iconArrow.style.transform = 'rotate(180deg)';
                    iconHover.style.transform = 'rotate(180deg)';
                    container.classList.add('expanded');
                }
            }
        </script>