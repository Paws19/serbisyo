<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serbisyo | Hire trusted Filipino workers. Find work near you.</title>
    <meta name="description"
        content="Serbisyo connects customers with Filipino contractors and freelancers, and gives skilled Filipinos a steady way to find jobs.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Figtree:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --ivory: #f7f4ec;
            --beige: #ece6d6;
            --forest: #1f4a37;
            --forest-deep: #153326;
            --sage: #8fa68f;
            --charcoal: #26302b;
            --muted: #5d6a62;
            --line: #d9d2bf;
            --bs-body-font-family: 'Figtree', system-ui, sans-serif;
            --bs-body-color: var(--charcoal);
            --bs-body-bg: var(--ivory);
        }

        body {
            font-size: 1.05rem;
            line-height: 1.65
        }

        h1,
        h2,
        h3,
        .brand {
            font-family: 'Fraunces', Georgia, serif;
            font-weight: 600;
            letter-spacing: -.015em;
            color: var(--forest-deep)
        }

        h1 {
            font-size: clamp(2.4rem, 5.4vw, 4rem);
            line-height: 1.06
        }

        h2 {
            font-size: clamp(1.8rem, 3.4vw, 2.6rem);
            line-height: 1.15
        }

        h3 {
            font-size: 1.3rem
        }

        .lead-sm {
            color: var(--muted);
            max-width: 34rem
        }

        section {
            padding: 5.5rem 0
        }

        .btn {
            border-radius: .5rem;
            font-weight: 600;
            padding: .75rem 1.4rem
        }

        .btn-forest {
            background: var(--forest);
            color: #fff;
            border: 1px solid var(--forest)
        }

        .btn-forest:hover,
        .btn-forest:focus {
            background: var(--forest-deep);
            color: #fff
        }

        .btn-line {
            border: 1.5px solid var(--forest);
            color: var(--forest);
            background: transparent
        }

        .btn-line:hover {
            background: var(--forest);
            color: #fff
        }

        :focus-visible {
            outline: 3px solid #c9a227;
            outline-offset: 2px
        }

        /* nav */
        .nav-wrap {
            background: var(--ivory);
            border-bottom: 1px solid var(--line)
        }

        .brand {
            font-size: 1.6rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: .55rem
        }

        .brand-mark {
            width: 30px;
            height: 30px;
            display: block
        }

        .nav-link {
            color: var(--charcoal);
            font-weight: 500
        }

        .nav-link:hover {
            color: var(--forest)
        }

        /* hero: banig weave is the one memorable element */
        .hero {
            padding: 4.5rem 0 5.5rem
        }

        .search {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: .75rem;
            padding: .5rem;
            display: flex;
            gap: .5rem;
            flex-wrap: wrap;
            max-width: 36rem
        }

        .search select,
        .search input {
            border: 0;
            flex: 1 1 9rem;
            padding: .7rem .9rem;
            background: transparent;
            font: inherit;
            min-width: 0
        }

        .search select {
            border-right: 1px solid var(--line)
        }

        .hero-note {
            color: var(--muted);
            font-size: .95rem
        }

        .banig {
            position: relative;
            border-radius: 1rem;
            background-color: var(--forest);
            background-image:
                repeating-linear-gradient(45deg, rgba(247, 244, 236, .14) 0 14px, transparent 14px 28px),
                repeating-linear-gradient(-45deg, rgba(143, 166, 143, .28) 0 14px, transparent 14px 28px);
            padding: 2.5rem 1.75rem;
            min-height: 30rem;
            overflow: hidden
        }

        .ticket {
            background: var(--ivory);
            border-radius: .6rem;
            padding: 1rem 1.15rem;
            max-width: 20rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .22);
            font-size: .97rem
        }

        .ticket+.ticket {
            margin-top: 1.1rem
        }

        .ticket:nth-child(1) {
            margin-left: 0
        }

        .ticket:nth-child(2) {
            margin-left: 3.5rem
        }

        .ticket:nth-child(3) {
            margin-left: 1rem
        }

        .ticket b {
            display: block;
            color: var(--forest-deep)
        }

        .ticket span {
            color: var(--muted);
            font-size: .9rem
        }

        .ticket .tag {
            float: right;
            font-size: .8rem;
            font-weight: 600;
            color: var(--forest);
            background: var(--beige);
            border-radius: 2rem;
            padding: .1rem .65rem
        }

        .rise {
            animation: rise .8s .1s both ease-out
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(14px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        /* two audiences */
        .band {
            background: var(--beige)
        }

        .path-card {
            border: 1px solid var(--line);
            background: var(--ivory);
            border-radius: .4rem;
            padding: 2.25rem;
            height: 100%
        }

        .path-card.dark {
            background: var(--forest);
            border-color: var(--forest);
            color: #e8efe9
        }

        .path-card.dark h3 {
            color: #fff
        }

        .path-card ul {
            padding-left: 1.1rem;
            margin: 1.25rem 0 1.75rem
        }

        .path-card li {
            margin-bottom: .45rem
        }

        .btn-ivory {
            background: var(--ivory);
            color: var(--forest-deep);
            border: 1px solid var(--ivory)
        }

        .btn-ivory:hover {
            background: #fff;
            color: var(--forest-deep)
        }

        /* services */
        .service {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.1rem 0;
            border-bottom: 1px solid var(--line);
            text-decoration: none;
            color: var(--charcoal)
        }

        .service:hover {
            color: var(--forest)
        }

        .service small {
            color: var(--muted)
        }

        /* process */
        .step {
            display: flex;
            gap: 1.1rem;
            margin-bottom: 1.75rem
        }

        .step .n {
            flex: 0 0 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            background: var(--forest);
            color: #fff;
            font-weight: 600;
            display: grid;
            place-items: center
        }

        .step p {
            margin: 0;
            color: var(--muted)
        }

        .track-title {
            padding-bottom: .75rem;
            margin-bottom: 1.75rem;
            border-bottom: 2px solid var(--forest)
        }

        /* trust */
        .fact {
            border-left: 3px solid var(--sage);
            padding-left: 1.1rem
        }

        .fact p {
            color: var(--muted);
            margin: 0
        }

        /* faq */
        .accordion {
            --bs-accordion-bg: transparent;
            --bs-accordion-border-color: var(--line);
            --bs-accordion-active-bg: var(--beige);
            --bs-accordion-active-color: var(--forest-deep);
            --bs-accordion-btn-focus-box-shadow: none
        }

        .accordion-button {
            font-weight: 600
        }

        /* cta + footer */
        .cta {
            background: var(--forest-deep);
            color: #dbe6de;
            padding: 5rem 0
        }

        .cta h2 {
            color: #fff
        }

        footer {
            background: var(--charcoal);
            color: #b9c3bc;
            padding: 3rem 0 2rem;
            font-size: .95rem
        }

        footer a {
            color: #b9c3bc;
            text-decoration: none
        }

        footer a:hover {
            color: #fff
        }

        footer .brand {
            color: #fff
        }

        @media (max-width:991px) {
            section {
                padding: 4rem 0
            }

            .banig {
                min-height: 24rem
            }

            .ticket:nth-child(2) {
                margin-left: 1.5rem
            }
        }

        @media (prefers-reduced-motion:reduce) {
            .rise {
                animation: none
            }
        }
    </style>
</head>

<body>

    <header class="nav-wrap">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container">
                <a class="brand" href="{{ url('/') }}" aria-label="Serbisyo home">
                    <svg class="brand-mark" viewBox="0 0 30 30" aria-hidden="true">
                        <rect width="30" height="30" rx="7" fill="#1f4a37" />
                        <path d="M7 21l8-12 8 12M10.5 21l4.5-6.8 4.5 6.8" fill="none" stroke="#f7f4ec"
                            stroke-width="2" stroke-linejoin="round" />
                    </svg>
                    Serbisyo
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                    aria-controls="nav" aria-expanded="false" aria-label="Toggle menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav mx-auto gap-lg-3">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#how">How it works</a></li>
                        <li class="nav-item"><a class="nav-link" href="#trust">Safety</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    </ul>
                    <div class="d-flex gap-2 mt-3 mt-lg-0">
                        <a class="btn btn-line" href="{{ url('/login') }}">Log in</a>
                        <a class="btn btn-forest" href="{{ url('/register') }}">Sign up free</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h1>Hire a trusted Filipino pro. Or get hired.</h1>
                        <p class="lead-sm fs-5 mt-3 mb-4">Serbisyo connects customers with local contractors and
                            freelancers across the Philippines, so the work gets done and the right people get paid.</p>
                        <form class="search mb-3" action="{{ url('/search') }}" method="get" role="search">
                            <label class="visually-hidden" for="svc">What do you need done?</label>
                            <select id="svc" name="service">
                                <option value="">What do you need?</option>
                                <option>Electrician</option>
                                <option>Plumber</option>
                                <option>Aircon technician</option>
                                <option>Computer technician</option>
                                <option>Carpenter</option>
                                <option>House cleaner</option>
                                <option>Web and graphic designer</option>
                            </select>
                            <label class="visually-hidden" for="loc">City or town</label>
                            <input id="loc" name="location" type="text" placeholder="City or town">
                            <button class="btn btn-forest" type="submit">Find a pro</button>
                        </form>
                        <p class="hero-note mb-0">Looking for work instead? <a
                                href="{{ url('/register?role=provider') }}" class="text-decoration-none fw-semibold"
                                style="color:var(--forest)">Create your provider profile</a>.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="banig rise" aria-hidden="true">
                            <div class="ticket"><span class="tag">Open</span><b>Leaking kitchen
                                    faucet</b><span>Antipolo, Rizal. Needs a plumber this week</span></div>
                            <div class="ticket"><span class="tag">Hired</span><b>Rewire two outlets</b><span>Silang,
                                    Cavite. Ate Mylene chose Kuya Dindo</span></div>
                            <div class="ticket"><span class="tag">Open</span><b>Logo for a sari-sari
                                    store</b><span>Cebu City. Freelance designer wanted</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="band" id="audiences">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="path-card">
                            <h3>I need something done</h3>
                            <p class="text-secondary mb-0">Post the job once, compare offers from people in your area,
                                and pick who you trust.</p>
                            <ul>
                                <li>Free to post a job</li>
                                <li>See profiles, past work and reviews before you choose</li>
                                <li>Agree on the price in writing before work starts</li>
                            </ul>
                            <a class="btn btn-forest" href="{{ url('/register?role=client') }}">Post a job</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="path-card dark">
                            <h3>I want to find work</h3>
                            <p class="mb-0">Whether you fix aircon or design websites, put your skills where
                                customers are already looking.</p>
                            <ul>
                                <li>Build a profile with your skills, rates and service area</li>
                                <li>Get job requests from customers near you</li>
                                <li>Keep your earnings. No hidden cuts on the agreed price</li>
                            </ul>
                            <a class="btn btn-ivory" href="{{ url('/register?role=provider') }}">Create provider
                                profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <h2>Skilled people for the jobs around your home and business</h2>
                        <p class="lead-sm mt-3">From quick repairs to remote freelance work, find the trade you need.
                        </p>
                        <a class="btn btn-line mt-2" href="{{ url('/services') }}">Browse all services</a>
                    </div>
                    <div class="col-lg-7">
                        <a class="service"
                            href="{{ url('/services/electrical') }}"><span>Electricians<br><small>Wiring, outlets,
                                    lighting, breaker repair</small></span><span aria-hidden="true">&rarr;</span></a>
                        <a class="service" href="{{ url('/services/plumbing') }}"><span>Plumbers<br><small>Leaks,
                                    pipes, heaters, drainage</small></span><span aria-hidden="true">&rarr;</span></a>
                        <a class="service" href="{{ url('/services/aircon') }}"><span>Aircon and appliance
                                repair<br><small>Cleaning, installation, troubleshooting</small></span><span
                                aria-hidden="true">&rarr;</span></a>
                        <a class="service" href="{{ url('/services/it') }}"><span>Computer and network
                                technicians<br><small>Repairs, setup, CCTV, wifi</small></span><span
                                aria-hidden="true">&rarr;</span></a>
                        <a class="service" href="{{ url('/services/cleaning') }}"><span>Cleaners and household
                                help<br><small>General cleaning, labada, move-out cleaning</small></span><span
                                aria-hidden="true">&rarr;</span></a>
                        <a class="service"
                            href="{{ url('/services/freelance') }}"><span>Freelancers<br><small>Design, writing, web
                                    development, virtual assistants</small></span><span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="band" id="how">
            <div class="container">
                <h2 class="mb-5">How Serbisyo works</h2>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="track-title">For customers</h3>
                        <div class="step">
                            <div class="n">1</div>
                            <div>
                                <h4 class="h6 mb-1">Describe the job</h4>
                                <p>Tell us what you need, where, and your budget.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">2</div>
                            <div>
                                <h4 class="h6 mb-1">Compare offers</h4>
                                <p>Pros reply with prices and availability. Check their profiles and reviews.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">3</div>
                            <div>
                                <h4 class="h6 mb-1">Hire and review</h4>
                                <p>Confirm your pick, get the work done, then leave an honest review.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="track-title">For workers and freelancers</h3>
                        <div class="step">
                            <div class="n">1</div>
                            <div>
                                <h4 class="h6 mb-1">Set up your profile</h4>
                                <p>List your skills, experience, rates and the areas you serve.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">2</div>
                            <div>
                                <h4 class="h6 mb-1">Reply to requests</h4>
                                <p>Send your price and schedule to customers who need what you do.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">3</div>
                            <div>
                                <h4 class="h6 mb-1">Do great work, build your name</h4>
                                <p>Every finished job adds a review that brings you more customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="trust">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-5">
                        <h2>Made for Filipinos, built on trust</h2>
                        <p class="lead-sm mt-3">Serbisyo is open only to people in the Philippines, so you deal with
                            real neighbors who know the area and speak your language.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Verified profiles</h3>
                                    <p>Providers confirm their identity before they can accept jobs.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Real reviews</h3>
                                    <p>Only customers who hired through Serbisyo can leave a review.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Clear pricing</h3>
                                    <p>Agree on the rate before work begins, with no surprise charges.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Local support</h3>
                                    <p>Questions or a dispute? Our team replies in English or Filipino.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="band" id="faq">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <h2>Questions people ask</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion" id="faqs">
                            <div class="accordion-item">
                                <h3 class="accordion-header"><button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true"
                                        aria-controls="q1">Is Serbisyo free to join?</button></h3>
                                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqs">
                                    <div class="accordion-body">Signing up and posting jobs is free. Providers can
                                        create a profile and browse requests at no cost.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header"><button class="accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#q2"
                                        aria-expanded="false" aria-controls="q2">Who can use Serbisyo?</button></h3>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">Serbisyo is for Filipinos and for work done in the
                                        Philippines. You will confirm this when you sign up.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header"><button class="accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#q3"
                                        aria-expanded="false" aria-controls="q3">How do I know a worker is
                                        reliable?</button></h3>
                                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">Check their verified badge, completed jobs and customer
                                        reviews. You can message them with questions before you hire.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header"><button class="accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#q4"
                                        aria-expanded="false" aria-controls="q4">Can I find remote freelance work
                                        too?</button></h3>
                                <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">Yes. Designers, writers, developers and virtual
                                        assistants can list their services and work with customers anywhere in the
                                        Philippines.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header"><button class="accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#q5"
                                        aria-expanded="false" aria-controls="q5">What if the job goes wrong?</button>
                                </h3>
                                <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">Contact support from your job page. We review both
                                        sides and help reach a fair resolution.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2>Ready to get started?</h2>
                        <p class="mb-0 mt-2">Join Serbisyo today. Hire someone you can trust, or start getting jobs.
                        </p>
                    </div>
                    <div class="col-lg-4 d-flex gap-2 flex-wrap justify-content-lg-end">
                        <a class="btn btn-ivory" href="{{ url('/register?role=client') }}">Post a job</a>
                        <a class="btn btn-outline-light" href="{{ url('/register?role=provider') }}">Find work</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <span class="brand mb-2 d-inline-block">Serbisyo</span>
                    <p class="mb-0" style="max-width:22rem">Connecting Filipino customers with Filipino workers and
                        freelancers.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h4 class="h6 text-white">Platform</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ url('/services') }}">Browse services</a></li>
                        <li><a href="{{ url('/register?role=provider') }}">Become a provider</a></li>
                        <li><a href="#how">How it works</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h4 class="h6 text-white">Company</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/terms') }}">Terms</a></li>
                        <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <p class="mb-0">&copy; {{ date('Y') }} Serbisyo. Made in the Philippines.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
