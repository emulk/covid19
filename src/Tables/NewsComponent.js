import React, { Component } from 'react';
import { Row, Col } from 'react-bootstrap';
import './NewsComponent.css';


class NewsComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            dataInfo: ''
        };

        this.renderTableData = this.renderTableData.bind(this);
        this.usNews = this.usNews.bind(this);
        this.gbNews = this.gbNews.bind(this);
    }

    componentDidMount() {
        this.usNews();
        this.gbNews();
    }

    renderTableData() {
        if (this.state.dataInfo.length > 0) {
            let count = 0;
            return this.state.dataInfo.map((dataInfo, index) => {
                if (count < 20) {
                    count++
                    const { author, content, description, publishedAt, source, title, url, urlToImage } = dataInfo;
                    var _titleToShow = title.split("-")[0];
                    return (
                        <Row key={index} className="rowTableNews">
                            <Col>
                                <Row className="singleRowNews">
                                    <Col>
                                        <a href={url} target="_blank" >
                                            <Row >
                                                <Col className="sourceNameInfo">{source.name}</Col>

                                                <Col className="sourcePublishedAt">{publishedAt}</Col>
                                            </Row>
                                            <Row className="sourceNameTitle">{_titleToShow}</Row>
                                        </a>
                                    </Col>
                                </Row>
                            </Col>
                        </Row>
                    )
                }

            })
        }
    }



    async usNews() {
        let url = window.location.href;
        let debugUrl = "https://www.ncovid19.it/News/";
        url = debugUrl;

        url += "NewsEndpoints.php?covid=us";

        let response = await fetch(url);
        let data = await response.json();

        if (data.status === 'ok' && data.totalResults > 0) {
            var dataResult = [];
            if (this.state.dataInfo.length > 0) {
                dataResult = dataResult.concat(this.state.dataInfo);
            }
            dataResult = dataResult.concat(data.articles);
            this.setState({
                dataInfo: dataResult
            })
        }
    }

    async gbNews() {
        let url = window.location.href;
        let debugUrl = "https://www.ncovid19.it/News/";
        url = debugUrl;

        url += "NewsEndpoints.php?covid=gb";

        let response = await fetch(url);
        let data = await response.json();

        if (data.status === 'ok' && data.totalResults > 0) {
            var dataResult = [];
            if (this.state.dataInfo.length > 0) {
                dataResult = dataResult.concat(this.state.dataInfo);
            }
            dataResult = dataResult.concat(data.articles);
            this.setState({
                dataInfo: dataResult
            })
        }
    }


    render() {
        return (

            <Col className="newComponentStyle">
                {this.renderTableData()}
            </Col>

        );
    }
}

export default NewsComponent;