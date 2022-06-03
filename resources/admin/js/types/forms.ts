import { Form } from '@macramejs/macrame-vue3';

// Example

export type Example = {
    foo: 'string'
}
export type ExampleForm = Form<Example>;

// Page

export type PageContent = {
    name: string,
    content: {[k:string]: any}[],
    attributes: {[k:string]: any}
}
export type PageContentForm = Form<PageContent>;

export type PageMeta = {
    title: string,
    description: string
}
export type PageMetaForm = Form<PageMeta>;


// Block

export type BlockContent = {
    name: string,
    content: {[k:string]: any}[],
}
export type BlockContentForm = Form<BlockContent>;