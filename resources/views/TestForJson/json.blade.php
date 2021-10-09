@jsonapi('v1', JSON_PRETTY_PRINT)
<script type="application/vnd.api+json">
    @encode($post, 'author', ['author' => ['name']])
</script>

<script type="application/vnd.api+json">
    {
        "data": {
            "type": "posts",
            "id": "1",
            "attributes": {
                "content": "Hello World"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "users",
                        "id": "2"
                    }
                }
            }
        },
        "include": [
            {
                "type": "users",
                "id": "2",
                "attributes": {
                    "name": "Frankie Manning"
                }
            }
        ]
    }
</script>