<ul class="main-menu__list">
    <li @if (request()->is(['index'])) class="current" @endif>
        <a href="{{ route('index') }}">Home</a>
    </li>
    <li @if (request()->is(['about'])) class="current" @endif>
        <a href="{{ route('about') }}">About Us</a>
    </li>
    {{-- <li class="dropdown @if (request()->is(['team', 'team-details', 'testimonials', 'faq', '404', 'coming-soon'])) current @endif">
        <a href="#">Pages</a>
        <ul>
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('team-details') }}">Team Details</a></li>
            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('faq') }}">Faq</a></li>
            <li><a href="{{ route('404') }}">404 Error</a></li>
            <li><a href="{{ route('coming-soon') }}">Coming Soon</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is([
            'services',
            'evolve-space-designs',
            'eden-home-styling',
            'harmony-interiors',
            'interior-design',
            'urban-design',
            'landscape-design',
        ])) current @endif">
        <a href="#">Services</a>
        <ul>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('evolve-space-designs') }}">Evolve Space Designs</a></li>
            <li><a href="{{ route('eden-home-styling') }}">Eden Home Styling</a>
            </li>
            <li><a href="{{ route('harmony-interiors') }}">Harmony Interiors</a>
            </li>
            <li><a href="{{ route('interior-design') }}">Interior Design</a></li>
            <li><a href="{{ route('urban-design') }}">Urban Design</a>
            </li>
            <li><a href="{{ route('landscape-design') }}">Landscape Design</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is(['projects', 'project-details'])) current @endif">
        <a href="#">projects</a>
        <ul>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('project-details') }}">Project Details</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is(['blog', 'blog-2', 'blog-details'])) current @endif">
        <a href="#">Blog</a>
        <ul>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('blog-2') }}">Blog Style2</a></li>
            <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
        </ul>
    </li> --}}
    <li @if (request()->is(['contact'])) class="current" @endif>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
