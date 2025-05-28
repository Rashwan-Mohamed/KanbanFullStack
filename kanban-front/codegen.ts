import {CodegenConfig} from "@graphql-codegen/cli";

const config: CodegenConfig = {
    schema: "http://localhost:8888/graphql",
    documents: ["src/**/*.{ts,tsx}"],
    generates: {
        "../src/__generated__/": {
            preset: "client",
            plugins: [],
            presetConfig: {
                gqlTagName: "gql",
            },
        }, "./src/__generated__/types.ts": {
            plugins: ["typescript", "typescript-operations"],
        }
    },
    ignoreNoDocuments: true,
};

export default config;