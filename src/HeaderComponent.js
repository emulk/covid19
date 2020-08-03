import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col, Nav, Form } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faHeadSideCough, faGlobeEurope, faGlobe, faMap, faVial, faNewspaper, faAddressCard, faSyringe } from '@fortawesome/free-solid-svg-icons';
import { withNamespaces } from 'react-i18next';
import i18n from './i18n';
import './HeaderComponent.css';

class HeaderCompontent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            pageName: '',
            lang:'en'
        };

        this.handleChangeLang = this.handleChangeLang.bind(this);
    }

    componentDidMount(){
        let _language = JSON.parse(localStorage.getItem('language'));
        if(_language){
            i18n.changeLanguage(_language);
            this.setState({ lang: _language });
        }
    }

    handleChangeLang(event){
        let _language = event.target.value;
        i18n.changeLanguage(_language);
        this.setState({ lang: _language });
        localStorage.setItem('language', JSON.stringify(_language));
                    
    }

    render() {

        const { t } = this.props;

        return (
            <Row className="headerStyle">
                <Col className="col-md-4 siteIdentity">
                    <img src="covidLogo.png" className="logo" alt="logo" /><span className="headerTitle">COVID-19</span> {t('News')}
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
                                            {t('OVERVIEW')}
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
                                            {t('REGION')}
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
                                            {t('GLOBE')}

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
                                            {t('MAP')}
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
                                            {t('VACCINE')}
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
                                            {t('SYMPTOMS')}
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
                                            {t('ABOUT')}
                                        </Col>
                                    </Row>
                                </Nav.Link>
                            </Nav.Item>
                            <Nav.Item className="headerNavItem">
                                <Form.Control as="select" size="lg" custom value={this.state.lang} onChange={this.handleChangeLang} >
                                    <option>en</option>
                                    <option>it</option>
                                </Form.Control>
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

export default withRouter(withNamespaces()(HeaderCompontent));