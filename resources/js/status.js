class Status {
    static all(then)
    {
        return axios.get('/status')
                    .then(response => then(response.data.status));
    }
}

export default Status;