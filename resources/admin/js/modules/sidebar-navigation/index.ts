import { IconList } from '@macramejs/admin-vue3';
import { IconPages } from '@macramejs/admin-vue3';
import { IconMediaImageFolder } from '@macramejs/admin-vue3';
import { IconDashboard } from '@macramejs/admin-vue3';

type SidebarNavigationLink = {
    title: string;
    href: string;
    icon?: string;
};

export const sidebarLinks = <SidebarNavigationLink[]>[
    {
        title: 'Dashboard',
        href: '/admin',
        icon: IconDashboard,
    },
];


// Media links
sidebarLinks.push({
    title: "Medien",
    href: "/admin/media",
    icon: IconMediaImageFolder,
}); 

// Pages links
sidebarLinks.push({
    title: "Seiten",
    href: "/admin/pages",
    icon: IconPages
}); 

// Navigation links
sidebarLinks.push({
    title: "Navigation",
    href: "/admin/nav",
    icon: IconList,
}); 