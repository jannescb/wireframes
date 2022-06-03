import { Media } from "./resources";

export type Repeatable<M> = {
    type: string,
    value: M
}

export type Repeatables = (
    TextFullRepeatable | 
    TextImageRepeatable |
    ImageFullRepeatable
)[];

export interface Image {
    link: string,
    alt: string,
    title: string,
}
export interface Link {
    link: string,
    text: string
}

// TextFull

export interface TextFull {
    text: string
}
export type TextFullRepeatable = Repeatable<TextFull>;

// TextImage

export interface TextImage {
    text: string,
    image: string
}
export type TextImageRepeatable = Repeatable<TextImage>;

// ImageFullRepeatable

export interface ImageFull {
    image: Media
}
export type ImageFullRepeatable = Repeatable<ImageFull>;

// Infobox

export interface Infobox {
    title: string
    text: string,
    link: Link,
}
export type InfoboxRepeatable = Repeatable<Infobox>;

// Cards

export interface Card {
    title: string,
    text: string,
    image?: Image,
    link?: Link,
}
export interface Cards {
    headline: string
    items: Card[]
}
export type CardsRepeatable = Repeatable<Cards>;
