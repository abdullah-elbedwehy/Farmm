import app


def test_index():
    client = app.app.test_client()
    response = client.get('/')
    assert response.json == {'message': 'Hello from Flask'}
