import React, { Component } from 'react';
import { Row, Col } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faTimes, faMobile } from '@fortawesome/free-solid-svg-icons';
import './NotificationsComponent.css';


class NotificationsComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            showNotification: true
        };
        this.closeNotification = this.closeNotification.bind(this);
    }

    componentDidMount() {
    }

    closeNotification() {
        this.setState({
            showNotification: false
        })
    }



    render() {
        return (
            <>
                {
                    this.state.showNotification && (
                        <Col className="rowNotificationsComponent">
                            <Row>
                                <Col className="colNotificationsComponent">


                                    <Row className="notificationTitle">
                                        <Col className="col-10">
                                            <a href="https://play.google.com/store/apps/details?id=it.elegantweb.immunitydashboard" target="_blank">
                                            <FontAwesomeIcon className="" icon={faMobile} /> Did you know?
                                            </a>
                                        </Col>
                                        <Col className="clossingColumn col-1" onClick={this.closeNotification}>
                                            <FontAwesomeIcon className="closeButton" icon={faTimes} />
                                        </Col>
                                    </Row>
                                    <a href="https://play.google.com/store/apps/details?id=it.elegantweb.immunitydashboard" target="_blank">
                                        <Row className="notificationBody">
                                         You can download the mobile app on Google Play
                                    </Row>
                                    </a>
                                </Col>

                            </Row>
                        </Col>
                    )

                }
            </>
        );
    }
}

export default NotificationsComponent;