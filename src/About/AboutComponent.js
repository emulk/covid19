import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col, Table, Form } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLink } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faInstagram, faTwitter, faLinkedin } from "@fortawesome/free-brands-svg-icons"
import './AboutComponent.css';


class About extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };

        this.copyLinkToClipboard = this.copyLinkToClipboard.bind(this);
    }

    copyLinkToClipboard() {
        var _link = "https://www.ncovid19.it/"
        var input = document.createElement('input');
        input.setAttribute('value', _link);
        document.body.appendChild(input);
        input.select();
        var result = document.execCommand('copy');
        document.body.removeChild(input);
    }




    render() {
        return (
            <Row>
                <Col>
                    <Row>
                        <Col className="buymeacoffee">
                            <a href='https://ko-fi.com/J3J41QR7Y' target='_blank'><img height='36' src='https://cdn.ko-fi.com/cdn/kofi2.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
                        </Col>
                    </Row>
                    <Row>
                        <Col>

                        </Col>
                        <Col className="socialRowAbout">
                            <Row >
                                <Col className="shareAboutTitle">
                                    Share
                                </Col>
                            </Row>
                            <Row >
                                <Col className="socialIconAbout" onClick={this.copyLinkToClipboard}>
                                    <FontAwesomeIcon icon={faLink} />
                                </Col>
                                <Col className="socialIconAbout">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.ncovid19.it/" target="_blank">
                                        <FontAwesomeIcon icon={faFacebook} />
                                    </a>
                                </Col>
                                <Col className="socialIconAbout">
                                    <a href="https://twitter.com/share?url=https://www.ncovid19.it/&amp;text=Covid19&amp;hashtags=Covid19" target="_blank">
                                        <FontAwesomeIcon icon={faTwitter} />
                                    </a>
                                </Col>
                                <Col className="socialIconAbout">
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.ncovid19.it/" target="_blank">
                                        <FontAwesomeIcon icon={faLinkedin} />
                                    </a>
                                </Col>
                            </Row>
                        </Col>
                        <Col>
                        </Col>
                    </Row>

                    <Row>

                        <Col>
                        </Col>
                        <Col className="iframeCode">
                            <Row>
                                <Col className="iframeCodeTitle">
                                    Add the iframe to your website, copy the following code:
                                </Col>
                            </Row>
                            <Row>
                                <Col className="iframeCodeStyle">
                                    {'<iframe src="https://www.ncovid19.it" width="100%" height="900" title="Covid19 Real Time News"></iframe>'}
                                </Col>

                            </Row>
                        </Col>
                        <Col></Col>

                    </Row>

                    <Row>

                        <Col>
                        </Col>
                        <Col className="emailStyleSection">
                            <Row>
                                <Col className="emailStyleSectionTitle">
                                    Do you have any idea or want to collaborate, write me on:
                         </Col>
                            </Row>
                            <Row>
                                <Col className="emailStyle">
                                    info@elegantweb.it
                                </Col>

                            </Row>
                        </Col>
                        <Col></Col>

                    </Row>

                </Col>

            </Row >
        );
    }

}



export default withRouter(About);