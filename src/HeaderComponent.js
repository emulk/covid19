import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col, Nav } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faHeadSideCough, faGlobeEurope, faGlobe, faMap, faVial, faNewspaper, faAddressCard, faSyringe } from '@fortawesome/free-solid-svg-icons';
import './HeaderComponent.css';

class HeaderCompontent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            pageName: ''
        };
    }

    render() {
        return (
            <Row className="headerStyle">
                <Col className="col-md-4 siteIdentity">
                    <img src="covidLogo.png" className="logo" alt="logo" /><span className="headerTitle">COVID-19</span> News
                </Col>

                <Col className="col-md-8 menuStyle">
                    <Row>

                        <Nav bg="transparent" expand="md" className="navBarHeaderStyle justify-content-center">
                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/"><Row>
                                    <Col>
                                        <FontAwesomeIcon icon={faHome} />
                                    </Col>
                                </Row>
                                    <Row>
                                        <Col>
                                            OVERVIEW
                                </Col>
                                    </Row></Nav.Link>
                            </Nav.Item>

                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/Regions">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faGlobeEurope} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            REGION
                                </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>
                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/globe">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faGlobe} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            GLOBE
                                </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>
                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/map">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faMap} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            MAP
                                </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>                            
                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/Vaccine">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faSyringe} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            VACCINE
                                        </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>
                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/Symptoms">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faHeadSideCough} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            SYMPTOMS
                                        </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>

                            <Nav.Item className="headerNavItem">
                                <Nav.Link href="/About">
                                    <Row>
                                        <Col>
                                            <FontAwesomeIcon icon={faAddressCard} />
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            ABOUT
                                        </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>
                            
                            {/* 
                        <Nav.Item>
                            <Nav.Link href="/test">
                                <Row>
                                    <Col>
                                        <FontAwesomeIcon icon={faVial} />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        TEST
                    </Col>
                                </Row>
                            </Nav.Link>
                        </Nav.Item>

                        <Nav.Item>
                            <Nav.Link href="/test">
                                <Row>
                                    <Col>
                                        <FontAwesomeIcon icon={faNewspaper} />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        NEWS
                    </Col>
                                </Row>
                            </Nav.Link>
                        </Nav.Item>
*/}
                        </Nav>

                    </Row>

                </Col>


            </Row>
        );
    }
}

export default withRouter(HeaderCompontent);