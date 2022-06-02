import { RawTreeItem } from "@macramejs/macrame-vue3";
export type Resource<Model> = {data: Model};
export type CollectionResource<Model> = {data: Model[]};

// DateTime

export type DateTime = {
    readable_diff: string
}
export type DateTimeResource = Resource<DateTime>;

// State

export type State = {
    label: string,
    value: string,
}
export type StateResource = Resource<State>;
export type StatesCollectionResource = CollectionResource<State>;

// ..

// Media

export type Media = {
    id?: number,
    display_name: string,
    group: string,
    disk: string,
    filepath: string,
    filename: string,
    mimetype: string,
    size: number,
}
export type MediaResource = Resource<File>;

// MediaCollection

export type MediaCollection = {
    id?: number,
    title: string,
    key?: string,
}
export type MediaCollectionResource = Resource<MediaCollection>;
export type MediaCollectionCollectionResource = CollectionResource<MediaCollection>;

// Page

export type Page = {
    content: { [key: string]: any };
    attributes: { [key: string]: any };
    id?: number;
    name: string;
    slug: string;
    template: string;
    full_slug: string;
    meta: {
        title: string;
        description: string;
    };
};

export type PageTreeItem = RawTreeItem<Page>;
export type PageResource = Resource<Page>;
export type PageCollectionResource = CollectionResource<Page>;
export type PageTreeResource = Resource<PageTreeItem>;
export type PageTreeCollectionResource = CollectionResource<PageTreeItem>;

// Nav

export type NavItem = {
    id?: number,
    title: string,
    link: string,
    children: NavItem[],
}
export type NavItemTreeItem = RawTreeItem<NavItem>;
export type NavItemTreeResource = Resource<NavItemTreeItem>;
export type NavItemTreeCollectionResource = CollectionResource<NavItemTreeItem>;

export type LinkOption = {
    link: string,
    title: string,
}
export type LinkOptionResource = Resource<LinkOption>;
export type LinkOptionCollectionResource = CollectionResource<LinkOption>;